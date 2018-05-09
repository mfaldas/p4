<?php

/**
 * Table of Verbs
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/8/2018
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerbsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('verbs', function (Blueprint $table) {
            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way - Note from DWA15 Notes Set
            $table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row - Note from DWA15 Notes Set
            $table->timestamps();

            $table->string('englishTranslation');
            $table->string('filipinoRootTranslation');
            $table->string('filipinoPastTenseTranslation');
            $table->string('filipinoPresentTenseTranslation');
            $table->string('filipinoFutureTenseTranslation');
            $table->string('japaneseRootTranslation');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verbs');
    }
}
