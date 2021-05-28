<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<=5;$i++){
            DB::table('brands')->insert([
                'brand_name'=>'Brand '.$i,
                'brand_logo'=>'Logo '.$i,
            ]);
        }
    }
}
