<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('device_id')->unsigned()->nullable();
            $table->integer('tempValue');
            $table->integer('humValue');
            $table->integer('soilHumValue');
            $table->boolean('weatherValue');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('sensors')->insert(
            [
                'id' => 1,
                'tempValue' => 3 ,
                'humValue' => 4 ,
                'soilHumValue' => 3 ,
                'weatherValue' => 3 ,

            ]

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}
