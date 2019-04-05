<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hostelname');
            $table->string('location');
            $table->string('size');
            $table->string('image');
            $table->float('rent');
            $table->integer('commonroom');
            $table->integer('diningroom');
            $table->integer('availableseat');
            $table->integer('perroomseat');
            $table->integer('kitchen');
            $table->integer('attacbathhroom');
            $table->integer('commonbathroom');
            $table->integer('floorlevel');
            $table->float('securitydeposite');
            $table->string('ownername');
            $table->integer('mobileno');
            $table->string('email');
            $table->string('owneraddress');
            $table->string('status');
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
        Schema::dropIfExists('hostels');
    }
}
