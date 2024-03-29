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
            $table->enum('status',['to by confirmed','confirmed','completed','paid'])->default("to by confirmed")->nullable();
            $table->string('firstName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone',256)->nullable();
            $table->string('deliveryAirport')->nullable();
            $table->date('deliveryDay')->nullable();
            $table->string('deliveryTime')->nullable();
            $table->string('company')->nullable();
            $table->string('handling')->nullable();
            $table->string('packaging')->nullable();
            $table->string('allergies')->nullable();
            $table->text('order')->nullable();
            $table->string('order_pdf')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
