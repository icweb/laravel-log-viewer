<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_files', function(Blueprint $table){

            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('source')->nullable();
            $table->string('path');
            $table->timestamps();

        });

        Schema::create('sites', function(Blueprint $table){

            $table->increments('id');
            $table->string('key')->nullable();
            $table->string('val')->nullable();
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
        //
    }
}
