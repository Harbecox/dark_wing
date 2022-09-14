<?php

namespace Database\Factories;

use App\Models\Airport;
use App\Models\Country;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class AirportFactory extends Factory
{
    protected $model = Airport::class;

    public function definition()
    {
        $images = [
            'image' => null,
            'bg_image' => null,
        ];
        $title = "";
        while(!$images['image'] || !$images['bg_image']){
            $title = Country::query()->get()->random(1)->first()->name;
            $images = $this->getImagees($title);
        }

        return [
            'title' => $title,
            'country_id' => $this->faker->numberBetween(1,249),
            'description' => $this->faker->realText(500),
            'IATA' => $this->faker->countryISOAlpha3,
            'OACI' => $this->faker->countryCode,
            'image' => 'public/airports/'.$images['image'],
            'bg_image' => 'public/airports/'.$images['bg_image'],
        ];
    }

    private function getImagees($title){
        $client = new Client();
        $t = false;
        while ($t === false){
            try{
                $response = $client->get('https://pixabay.com/api/?key=29073457-a05a39b854900b7729083083c&q='.$title.'&min_width=1920&min_height=1080&category=places');
                $newArray = json_decode($response->getBody()->getContents(),true);
                $image = isset($newArray['hits'][0]) ? $newArray['hits'][0]['largeImageURL'] : null;
                $bg_image = isset($newArray['hits'][1]) ? $newArray['hits'][1]['largeImageURL'] : null;
                $t = true;
            }catch (\Exception $e){
                echo $e->getMessage()."\n";
                sleep(30);
                continue;
            }
        }

        if($image){
            $contents = file_get_contents($image);
            $name = substr($image, strrpos($image, '/') + 1);
            Storage::put("public/airports/".$name, $contents);
            $image = $name;
        }

        if($bg_image){
            $contents = file_get_contents($bg_image);
            $name = substr($bg_image, strrpos($bg_image, '/') + 1);
            Storage::put("public/airports/".$name, $contents);
            $bg_image = $name;
        }

        return [
            'image' => $image,
            'bg_image' => $bg_image,
        ];
    }
}
