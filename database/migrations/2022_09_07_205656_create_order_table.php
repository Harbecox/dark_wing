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
            $table->string('firstName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone',256)->nullable();
            $table->string('deliveryAirport')->nullable();
            $table->integer('deliveryDay')->default(1)->nullable();
            $table->integer('deliveryTime')->default(1)->nullable();
            $table->string('company')->nullable();
            $table->string('handling')->nullable();
            $table->string('packaging')->nullable();
            $table->string('allergies')->nullable();
            $table->string('order_pdf')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
