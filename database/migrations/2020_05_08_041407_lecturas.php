<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lecturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('name_lect');
            $table->string('content_lect',5000);
            $table->string('autor');
            $table->integer('points');
            $table->string('category');
            $table->boolean('status')->default(false);
            $table->boolean('finally')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
}
