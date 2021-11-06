<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFarmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfarms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('place');
            $table->string('phone');
            $table->integer('price');
            $table->integer('device_id')->unsigned()->nullable();
            $table->string('email');
            $table->string('password');
            $table->text('note')->nullable();
            $table->boolean('is_active');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('userfarms')->insert(
            [
                'id' => 1,
                'name' => 'farm1',
                'place' => 'marka',
                'phone' => '0795970357',
                'price' => 200,
                'note' => 'lksfvnlkdsnv',
                'email' => 'mutasem@gmail.com',
                'password' => '123456',
                'is_active' => true,

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
        Schema::dropIfExists('userfarms');
    }
}
