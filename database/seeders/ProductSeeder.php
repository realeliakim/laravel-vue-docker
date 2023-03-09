<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Produto 1',
        ]);

        Product::create([
            'name' => 'Produto 2',
        ]);

        Product::create([
            'name' => 'Produto 3',
        ]);
    }
}
