<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('name');
            $table->text('description');
            $table->string('specie');
            $table->string('origin');
            $table->integer('height');
            $table->string('substract');
            $table->string('Fertilizing');
            $table->text('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
