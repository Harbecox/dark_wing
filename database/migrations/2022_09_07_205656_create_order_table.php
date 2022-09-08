<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('firstName');
            $table->string('email');
            $table->integer('phone');
            $table->string('delivery_airport');
            $table->string('company');
            $table->string('handling');
            $table->string('packaging');
            $table->string('allergies');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
};
