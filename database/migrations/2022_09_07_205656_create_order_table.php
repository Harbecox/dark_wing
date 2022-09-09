<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->string('firstName');
            $table->string('email');
            $table->integer('phone');
            $table->string('deliveryAirport');
            $table->integer('deliveryDay');
            $table->integer('deliveryTime');
            $table->string('company')->nullable();
            $table->string('handling')->nullable();
            $table->string('packaging')->nullable();
            $table->string('allergies')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
};
