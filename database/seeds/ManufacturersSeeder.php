<?php

use Illuminate\Database\Seeder;
use taller_servicio\Manufacturer;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Manufacturer::truncate();

        Manufacturer::create([ 'name' => 'Toyota Motor Corporation' ]); // AKA Toyota
        Manufacturer::create([ 'name' => 'Hyundai Motor Group' ]);      // AKA Hyundai
        Manufacturer::create([ 'name' => 'Ford Motor Company' ]);       // AKA Ford
        Manufacturer::create([ 'name' => 'Nissan Motor Company Ltd' ]); // AKA Nissan
        Manufacturer::create([ 'name' => 'Honda Motor Company Ltd' ]);  // AKA Honda
        Manufacturer::create([ 'name' => 'Suzuki Motor Coporation' ]);  // AKA Suzuki
        Manufacturer::create([ 'name' => 'Mazda Motor Corporation' ]);  // AKA Mazda
        Manufacturer::create([ 'name' => 'Mitsubishi Motors Corporation' ]);    // AKA Mitsubishi
    }
}
