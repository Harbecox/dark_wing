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
            array("country_id"=>"76",   "title"=>"Nice",  "OACI"=>"LFMN","IATA"=>"NCE",'description' => $faker->realText(500),"image" => "public/airports/NCE.jpg","bg_image" => "public/airports/BG-NCE.jpg"),
            array("country_id"=>"76",   "title"=>"Cannes","OACI"=>"LFMD","IATA"=>"CEQ",'description' => $faker->realText(500),"image" => "public/airports/CEQ.jpg","bg_image" => "public/airports/BG-CEQ.jpg"),
            array("country_id"=>"76",   "title"=>"Marseille", "OACI"=>"LFML","IATA"=>"MRS",'description' => $faker->realText(500),"image" => "public/airports/MRS.jpg","bg_image" => "public/airports/BG-MRS.jpg"),
            array("country_id"=>"76",   "title"=>"Paris le Bourget",  "OACI"=>"LFPB","IATA"=>"LBG",'description' => $faker->realText(500),"image" => "public/airports/LBG.jpg","bg_image" => "public/airports/BG-LBG.jpg"),
            array("country_id"=>"76",   "title"=>"Toulon","OACI"=>"LFTH","IATA"=>"TLN",'description' => $faker->realText(500),"image" => "public/airports/TLN.jpg","bg_image" => "public/airports/BG-TLN.jpg"),
            array("country_id"=>"76",   "title"=>"La mole","OACI"=>"LFTZ","IATA"=>"LTT",'description' => $faker->realText(500),"image" => "public/airports/LTT.jpg","bg_image" => "public/airports/BG-LTT.jpg"),
            array("country_id"=>"110",  "title"=>"Milan", "OACI"=>"UML","IATA"=>"LIN",'description' => $faker->realText(500),"image" => "public/airports/LIN.jpg","bg_image" => "public/airports/BG-LIN.jpg"),
            array("country_id"=>"110",  "title"=>"Olbia", "OACI"=>"LIEO","IATA"=>"OLB",'description' => $faker->realText(500),"image" => "public/airports/OLB.jpg","bg_image" => "public/airports/BG-OLB.jpg"),
            array("country_id"=>"110",  "title"=>"Rome",  "OACI"=>"LIRF","IATA"=>"FCO",'description' => $faker->realText(500),"image" => "public/airports/FCO.jpg","bg_image" => "public/airports/BG-FCO.jpg"),
            array("country_id"=>"209",  "title"=>"Barcelona", "OACI"=>"LEBL","IATA"=>"BCN",'description' => $faker->realText(500),"image" => "public/airports/BCN.jpg","bg_image" => "public/airports/BG-BCN.jpg"),
            array("country_id"=>"209",  "title"=>"Malaga","OACI"=>"LEMG","IATA"=>"AGP",'description' => $faker->realText(500),"image" => "public/airports/AGP.jpg","bg_image" => "public/airports/BG-AGP.jpg"),
            array("country_id"=>"209",  "title"=>"Madrid","OACI"=>"LEMD","IATA"=>"MAD",'description' => $faker->realText(500),"image" => "public/airports/MAD.jpg","bg_image" => "public/airports/BG-MAD.jpg"),
            array("country_id"=>"235",  "title"=>"London Stansted","OACI"=>"EGSS","IATA"=>"STN",'description' => $faker->realText(500),"image" => "public/airports/STN.jpg","bg_image" => "public/airports/BG-STN.jpg"),
            array("country_id"=>"235",  "title"=>"London Luton",  "OACI"=>"EGGW","IATA"=>"LTN",'description' => $faker->realText(500),"image" => "public/airports/LTN.jpg","bg_image" => "public/airports/BG-LTN.jpg"),
            array("country_id"=>"183",  "title"=>"Moscow Vnukovo","OACI"=>"UUWW","IATA"=>"VKO",'description' => $faker->realText(500),"image" => "public/airports/VKO.jpg","bg_image" => "public/airports/BG-VKO.jpg"),
            array("country_id"=>"183",  "title"=>"Saint Petersburg",  "OACI"=>"ULLI","IATA"=>"LED",'description' => $faker->realText(500),"image" => "public/airports/LED.jpg","bg_image" => "public/airports/BG-LED.jpg"),
            array("country_id"=>"136",  "title"=>"Male",  "OACI"=>"VRMM","IATA"=>"MLE",'description' => $faker->realText(500),"image" => "public/airports/MLE.jpg","bg_image" => "public/airports/BG-MLE.jpg"),
            array("country_id"=>"157",  "title"=>"Saint Martin",  "OACI"=>"TNCM","IATA"=>"SXM",'description' => $faker->realText(500),"image" => "public/airports/SXM.jpg","bg_image" => "public/airports/BG-SXM.jpg"),
            array("country_id"=>"151",  "title"=>"Rabat", "OACI"=>"GMME","IATA"=>"RBA",'description' => $faker->realText(500),"image" => "public/airports/RBA.jpg","bg_image" => "public/airports/BG-RBA.jpg"),
            array("country_id"=>"64",   "title"=>"Punta Cana","OACI"=>"MDPC","IATA"=>"PUJ",'description' => $faker->realText(500),"image" => "public/airports/PUJ.jpg","bg_image" => "public/airports/BG-PUJ.jpg")
        );

        foreach ($arr as $item){
            Airport::create($item);
        }

    }
}
