<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('device_id')->nullable()->unsigned();
            $table->integer('gpio');
            $table->boolean('state');
            $table->string('active');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('outputs')->insert(
            [
                'id' => 1,
                'name' => 'redLed' ,
                'gpio' => 4 ,
                'state' => true ,
                'active' => 'manual' ,

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
        Schema::dropIfExists('outputs');
    }
}
