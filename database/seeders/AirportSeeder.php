<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\Country;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all()->keyBy("code")->map(function ($co){
            return $co->id;
        });

        $arr = explode("\r",Storage::get("airports.csv"));
        $airports = [];
        $keys = array_slice(explode(";",$arr[0]),0,9);
        $keys[0] = mb_substr($keys[0],1);
        foreach ($arr as $k => $v){
            if($k > 0){
                $row = [];
                foreach (array_slice(explode(";",$v),0,9) as $kk => $item){
                    $row[$keys[$kk]] = trim($item);
                }
                $airports[] = $row;
            }
        }
        //Continent,Country,ICAO,IATA,City,Airport,Country code,Latitude,Longitude

        foreach ($airports as $airport){
            if(!isset($airport['Airport'])){
                continue;
            }
            $a = [
                "title" => $airport['Airport'],
                "meta_title" => $airport['Airport'],
                "meta_description" => $airport['Airport'],
                "country_id" => 0,
                "description" => "",
                "image" => "/airports/img.jpg",
                "bg_image" => "/airports/bg.jpg",
            ];
            $port = Airport::create($a);
            $ai = [
                "icao" => $airport['ICAO'],
                "iata" => $airport['IATA'],
                "city" => $airport['City'],
                "country_id" => isset($countries[$airport['Country code']]) ? $countries[$airport['Country code']] : 1,
                "continent" => $airport['Continent'],
                "latitude" => $airport['Latitude'],
                "longitude" => $airport['Longitude'],
            ];
            $port->info()->create($ai);
        }

    }
}
