<?php

use Illuminate\Database\Seeder;
use taller_servicio\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Brand::truncate();

        Brand::create([ 'name' => 'Lexus', 'manufacturer_id' => 1 ]);
        Brand::create([ 'name' => 'Scion', 'manufacturer_id' => 1 ]);
        Brand::create([ 'name' => 'Toyota', 'manufacturer_id' => 1 ]);
        Brand::create([ 'name' => 'Toyota', 'manufacturer_id' => 1 ]);
        Brand::create([ 'name' => 'Infiniti', 'manufacturer_id' => 4 ]);
        Brand::create([ 'name' => 'Nissan', 'manufacturer_id' => 4 ]);
    }
}
