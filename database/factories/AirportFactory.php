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
        $airport = new Client();
        $title = "";
        $image = "";
        $t = false;
        while (!$t){
            $title = Country::query()->get()->random(1)->first()->name;
            $response = $airport->get('https://pixabay.com/api/?key=29073457-a05a39b854900b7729083083c&q='.$title.'&min_width=400&min_height=500&category=places');
            if($response->getHeader("X-RateLimit-Remaining")[0] == 1){
                echo "sleep 10 second\n";
                sleep(10);
            }

            $newArray = json_decode($response->getBody()->getContents(),true);
            if(isset($newArray['hits'][0])){
                $image = $newArray['hits'][0]['largeImageURL'];
                $t = true;
            }
        }

        $contents = file_get_contents($image);
        $name = substr($image, strrpos($image, '/') + 1);
        Storage::put("public/airports/".$name, $contents);

        return [
            'title' => $title,
            'country_id' => $this->faker->numberBetween(1,249),
            'description' => $this->faker->text(),
            'image' => 'public/airports/'.$name,
            'bg_image' => 'public/airports/'.$name,
        ];
    }
}
