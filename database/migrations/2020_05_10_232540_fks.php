<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('sensor_id')->nullable();
        
            $table->foreign('sensor_id')->references('id')->on('sensores');
        });
        Schema::table('sensores', function (Blueprint $table) {
            $table->unsignedBigInteger('value_id')->nullable();
        
            $table->foreign('value_id')->references('id')->on('values');
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
