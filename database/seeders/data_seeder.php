<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Http;
use App\Models\country_model;
use App\Models\state_model;
use App\Models\city_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates%2Bcities.json');
        $data = $all_data->json();

        $state_data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries%2Bstates.json');
        $state = $state_data->json();

        $city_data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/states%2Bcities.json');
        $city = $city_data->json();

        foreach ($data as $country_key => $country_value) {
            $countries_id = null;
            $state_id = null;
            $country_store = country_model::create([
                'country_name' => $country_value['name'],
            ]);
            $countries_id = $country_store->id;
            foreach ($state[$country_key]['states'] as $state_key => $state_value) {
                $state_store = state_model::create([
                    'country_id' => $countries_id,
                    'state_name' => $state_value['name'],
                ]);
                $state_id= $state_store->id;
                foreach ($city[$state_key]['cities'] as $city_key => $city_value) {
                    city_model::create([
                        'country_id' => $countries_id,
                        'state_id' => $state_id,
                        'city_name' => $city_value['name'],
                    ]);
                }
            }
        }
    }
}
