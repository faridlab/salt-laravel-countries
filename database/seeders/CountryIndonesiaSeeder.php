<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

use SaltCountries\Models\Countries;
use SaltCountries\Models\Provinces;
use SaltCountries\Models\Cities;
use SaltCountries\Models\Districts;
use SaltCountries\Models\Subdistricts;

class CountryIndonesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kodepos_path = base_path('database/seeders/kodepos.json');
        $kodepos_json = file_get_contents($kodepos_path);
        $postalcode = json_decode($kodepos_json, true);

        $country = Countries::create([
          'name' => 'Indonesia',
          'isocode' => 'ID',
          'phonecode'  => '+62',
        ]);

        $collection = collect($postalcode);
        $data = $collection->groupBy('province');

        foreach ($data as $pidx => $value) {
          $province = Provinces::create([
            'name' => $pidx,
            'country_id' => $country->id
          ]);

          $data[$pidx] = $value->groupBy('regency');
          foreach ($data[$pidx] as $cidx => $value) {
            $city = Cities::create([
              'name' => $cidx,
              'country_id' => $country->id,
              'province_id' => $province->id
            ]);

            $data[$pidx][$cidx] = $value->groupBy('district');
            foreach ($data[$pidx][$cidx] as $didx => $value) {
              $district = Districts::create([
                'name' => $didx,
                'country_id' => $country->id,
                'province_id' => $province->id,
                'city_id' => $city->id,
              ]);

              $data[$pidx][$cidx][$didx] = $value->groupBy('village');

              foreach ($data[$pidx][$cidx][$didx] as $vidx => $vilages) {
                foreach ($vilages as $idx => $vile) {
                  $subdistrict = Subdistricts::create([
                    'name' => $vidx,
                    'country_id' => $country->id,
                    'province_id' => $province->id,
                    'city_id' => $city->id,
                    'district_id' => $district->id,
                    'latitude' => $vile['latitude'],
                    'longitude' => $vile['longitude']
                  ]);
                }
              }
            }
          }
        }
    }
}
