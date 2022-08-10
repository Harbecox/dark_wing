<?php

namespace Database\Factories;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $client = new Client();
        $page = $this->faker->numberBetween(1,50);
        $response = $client->get('https://pixabay.com/api/?key=29073457-a05a39b854900b7729083083c&q=profile+avatar&per_page=3&page='.$page);
        if($response->getHeader("X-RateLimit-Remaining")[0] == 1){
            echo "sleep 10 second\n";
            sleep(10);
        }

        $newArray = json_decode($response->getBody()->getContents(),true);
        $image = $newArray['hits'][0]['previewURL'];

        $contents = file_get_contents($image);
        $name = substr($image, strrpos($image, '/') + 1);
        Storage::put("public/images/".$name, $contents);

        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'phone' => $this->faker->numerify('#########'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'company' => $this->faker->company(),
            'avatar' => 'public/images/'.$name,
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
