<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Main extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('partners');
        Schema::dropIfExists('medias');
        Schema::dropIfExists('years');
        Schema::dropIfExists('students');
        Schema::dropIfExists('answers');

        Schema::create('countries', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('partners', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('city');
            $table->integer('country_id');
            $table->timestamps();
        });

        Schema::create('medias', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('model')->comment('Type (Partner, ...)');
            $table->integer('model_id')->comment('ID du post');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('years', function(Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->timestamps();
        });

        Schema::create('students', function(Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->integer('year_id');
            $table->timestamps();
        });

        Schema::create('answers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('partner_id');

            // Champs questions dans les prochaines migrations

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
    }
}
