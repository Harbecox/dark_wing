<?php

namespace Database\Factories;

use App\Models\Airport;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class AirportFactory extends Factory
{
    protected $model = Airport::class;

    public function definition()
    {
        $airport = new Client();
        $page = $this->faker->numberBetween(1,50);
        $response = $airport->get('https://pixabay.com/api/?key=29073457-a05a39b854900b7729083083c&q=profile+avatar&per_page=3&page='.$page);
        if($response->getHeader("X-RateLimit-Remaining")[0] == 1){
            echo "sleep 10 second\n";
            sleep(10);
        }

        $newArray = json_decode($response->getBody()->getContents(),true);
        $image = $newArray['hits'][0]['previewURL'];

        $contents = file_get_contents($image);
        $name = substr($image, strrpos($image, '/') + 1);
        Storage::put("public/airports/".$name, $contents);

        return [
            'title' => $this->faker->country(),
            'country_id' => $this->faker->numberBetween(1,249),
            'description' => $this->faker->text(),
            'image' => 'public/airports/'.$name,
        ];
    }
}
