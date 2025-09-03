<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'detail' => 'Product #1 Details',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'detail' => 'Product #2 Details',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'detail' => 'Product #3 Details',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product #4',
            'detail' => 'Product #4 Details',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product #5',
            'detail' => 'Product #5 Details',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Product #6',
            'detail' => 'Product #6 Details',
        ]);
        $product->save();
    }
}
