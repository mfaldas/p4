<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteVerbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_verb', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('favorite_id')->unsigned();
            $table->integer('verb_id')->unsigned();

            $table->foreign('verb_id')->references('id')->on('favorites');
            $table->foreign('favorite_id')->references('id')->on('verbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_verb');
    }
}
