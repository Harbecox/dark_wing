<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone');
            $table->string('password');
            $table->rememberToken();
            $table->string('company');
            $table->boolean('admin_status')->default(0);
            $table->timestamps();
            $table->boolean('isBlocked')->default(false);
            $table->string('avatar')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
