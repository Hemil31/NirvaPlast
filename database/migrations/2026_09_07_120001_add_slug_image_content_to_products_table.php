<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $driver = Schema::getConnection()->getDriverName();

        if (! $this->hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table) use ($driver) {
                if ($driver === 'sqlite') {
                    $table->string('slug')->nullable();
                } else {
                    $table->string('slug')->nullable()->after('product_name');
                }
            });
        }

        if (! $this->hasColumn('products', 'image')) {
            Schema::table('products', function (Blueprint $table) use ($driver) {
                if ($driver === 'sqlite') {
                    $table->string('image')->nullable();
                } else {
                    $table->string('image')->nullable()->after('file_path');
                }
            });
        }

        if (! $this->hasColumn('products', 'content')) {
            Schema::table('products', function (Blueprint $table) use ($driver) {
                if ($driver === 'sqlite') {
                    $table->longText('content')->nullable();
                } else {
                    $table->longText('content')->nullable()->after('image');
                }
            });
        }
    }

    public function down(): void
    {
        if ($this->hasColumn('products', 'content')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('content');
            });
        }

        if ($this->hasColumn('products', 'image')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        }

        if ($this->hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('slug');
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