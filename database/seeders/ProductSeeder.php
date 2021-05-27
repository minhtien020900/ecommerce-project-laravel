<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i <= 15; $i++) {
            DB::table('products')->insert([
                'category_id' => $i,
                'brand_id' => $i,
                'product_name' => 'Product '.$i,
                'product_desc' => \Illuminate\Support\Str::random(20),
                'product_price' => random_int(1,20),
                'product_image' => 'image product '.$i,
            ]);
        }
    }
}
