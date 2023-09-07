<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airport_infos', function (Blueprint $table) {
            $table->unsignedBigInteger("airport_id")->primary();
            $table->string("oaci")->nullable();
            $table->string("iata")->nullable();
            $table->string("city")->nullable();
            $table->string("country_id")->nullable();
            $table->enum("continent",\App\Models\AirportInfo::CONTINENTS)->nullable();
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airport_infos');
    }
};
