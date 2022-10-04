<?php

namespace Database\Seeders;

use App\Models\Airport;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $arr = array(
            array("country_id"=>"76",   "title"=>"Nice",  "OACI"=>"LFMN","IATA"=>"NCE",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"76",   "title"=>"Cannes","OACI"=>"LFMD","IATA"=>"CEQ",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"76",   "title"=>"Marseille", "OACI"=>"LFML","IATA"=>"MRS",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"76",   "title"=>"Paris le Bourget",  "OACI"=>"LFPB","IATA"=>"LBG",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"76",   "title"=>"Toulon","OACI"=>"LFTH","IATA"=>"TLN",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"76",   "title"=>"La mole","OACI"=>"LFTZ","IATA"=>"LTT",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"110",  "title"=>"Milan", "OACI"=>"UML","IATA"=>"LIN",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"110",  "title"=>"Olbia", "OACI"=>"LIEO","IATA"=>"OLB",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"110",  "title"=>"Rome",  "OACI"=>"LIRF","IATA"=>"FCO",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"209",  "title"=>"Barcelona", "OACI"=>"LEBL","IATA"=>"BCN",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"209",  "title"=>"Malaga","OACI"=>"LEMG","IATA"=>"AGP",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"209",  "title"=>"Madrid","OACI"=>"LEMD","IATA"=>"MAD",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"235",  "title"=>"London Stansted","OACI"=>"EGSS","IATA"=>"STN",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"235",  "title"=>"London Luton",  "OACI"=>"EGGW","IATA"=>"LTN",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"183",  "title"=>"Moscow Vnukovo","OACI"=>"UUWW","IATA"=>"VKO",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"183",  "title"=>"Saint Petersburg",  "OACI"=>"ULLI","IATA"=>"LED",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"136",  "title"=>"Male",  "OACI"=>"VRMM","IATA"=>"MLE",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"157",  "title"=>"Saint Martin",  "OACI"=>"TNCM","IATA"=>"SXM",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"151",  "title"=>"Rabat", "OACI"=>"GMME","IATA"=>"RBA",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg"),
            array("country_id"=>"64",   "title"=>"Punta Cana","OACI"=>"MDPC","IATA"=>"PUJ",'description' => $faker->realText(500),"image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg","bg_image" => "public/airports/g0a420793755df4fb8ff26d588ecb1becb7f0775e5368a34c9863ce21aad411f974cdcae701767f02ddfc2eae7972bac5827f34d01aa8e150ed2c776d1aa7dce8_1280.jpg")
        );

        foreach ($arr as $item){
            Airport::create($item);
        }

    }
}
