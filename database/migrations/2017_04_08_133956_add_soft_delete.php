<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('countries', function(Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('partners', function(Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('medias', function(Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('years', function(Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('students', function(Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('answers', function(Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
