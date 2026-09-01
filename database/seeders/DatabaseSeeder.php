<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('Admin@123'),
        // ]);

        $products = [
            "ACETIC ACID",
            "ACETONE",
            "ALUMINIUM SULPHATE",
            "BORAX DECAHYDRATE",
            "BORIC ACID",
            "CALCIUM HYPOCHLORIDE",
            "CAUSTIC POTASH",
            "CAUSTIC SODA FLAKES",
            "CAUSTIC SODA LYE",
            "CAUSTIC SODA PRILLS",
            "DOLAMITE POWDER",
            "FORMALDEHYDE",
            "FORMIC ACID",
            "HYDRATED LIME POWDER",
            "HYDROCHLORIC ACID",
            "HYDROFLUORIC ACID",
            "HYDROGEN PEROXIDE",
            "ISOPROPYL ALCOHOLIPA",
            "ACID SLURRY (LABSA)",
            "IODOPHOR",
            "NITRIC ACID - STRONG - 72%",
            "NITRIC ACID – WEAK - 60%",
            "ORTHOPHOSPHORIC ACID - FOOD",
            "ORTHOPHOSPHORIC ACID - TECH",
            "POLY ALUMINIUM CHLORIDE",
            "POTASSIUM PERMANGANATE",
            "PROPYLENE GLYCOL",
            "SODA ASH",
            "SODIUM BICARBONATE REFINED",
            "SODIUM HYPOCHLORITE",
            "SODIUM METABISULPHITE",
            "SODIUM NITRATE",
            "SODIUM SULPHATE - FOOD",
            "SULPHURIC ACID - BATTERY",
            "SULPHURIC ACID - TECHNICAL",
            "TRISODIUM PHOSPHATE"
        ];

        foreach ($products as $product) {
            \App\Models\Product::create(['product_name' => $product, 'file_path' => 'uploads/Products/Acid Tone_1759427388.jpg', 'status' => 1]);
        }

        $this->call(TeamMemberSeeder::class);
    }
}
