<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longtext('context');
            $table->text('intro');
            $table->string('meta_title')->nullable();;
            $table->string('meta_description',1024)->nullable();;
            $table->string('seo_url');
            $table->boolean('enabled')->default(true);
            $table->timestamps();
            $table->string('image')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
