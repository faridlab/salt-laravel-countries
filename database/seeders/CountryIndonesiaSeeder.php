<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryIndonesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = base_path('database/seeders/countries.sql');
        $sql = file_get_contents($countries);
        DB::unprepared($sql);

        $provinces = base_path('database/seeders/provinces.sql');
        $sql = file_get_contents($provinces);
        DB::unprepared($sql);

        $cities = base_path('database/seeders/cities.sql');
        $sql = file_get_contents($cities);
        DB::unprepared($sql);

        $districts = base_path('database/seeders/districts.sql');
        $sql = file_get_contents($districts);
        DB::unprepared($sql);

        $subdistricts = base_path('database/seeders/subdistricts.sql');
        $sql = file_get_contents($subdistricts);
        DB::unprepared($sql);

        $postalcode = base_path('database/seeders/postalcode.sql');
        $sql = file_get_contents($postalcode);
        DB::unprepared($sql);
    }
}
