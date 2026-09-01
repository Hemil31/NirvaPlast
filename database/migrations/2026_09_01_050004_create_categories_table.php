<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug')->unique();
                $table->unsignedInteger('status')->default(1);
                $table->timestamps();
                $table->softDeletes();
            });
        }

        $driver = Schema::getConnection()->getDriverName();

        if ($this->hasColumn('products', 'category_id') === false) {
            Schema::table('products', function (Blueprint $table) use ($driver) {
                if ($driver === 'sqlite') {
                    $table->unsignedInteger('category_id')->nullable();
                } else {
                    $table->unsignedBigInteger('category_id')->nullable()->after('id');
                }
            });
        }

        $this->addForeignKey();
    }

    public function down(): void
    {
        $hasForeignKey = collect(Schema::getForeignKeys('products'))->contains(
            fn ($key) => isset($key['columns'], $key['foreign_table'])
                && $key['columns'] === ['category_id']
                && $key['foreign_table'] === 'categories'
        );

        if ($hasForeignKey) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropForeign(['category_id']);
            });
        }

        Schema::dropIfExists('categories');

        if ($this->hasColumn('products', 'category_id')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('category_id');
            });
        }
    }

    private function addForeignKey(): void
    {
        $hasForeignKey = collect(Schema::getForeignKeys('products'))->contains(
            fn ($key) => isset($key['columns'], $key['foreign_table'])
                && $key['columns'] === ['category_id']
                && $key['foreign_table'] === 'categories'
        );

        if (! $hasForeignKey) {
            Schema::table('products', function (Blueprint $table) {
                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('set null');
            });
        }
    }

    private function hasColumn(string $table, string $column): bool
    {
        try {
            return Schema::hasColumn($table, $column);
        } catch (\Throwable $e) {
            return false;
        }
    }
};
