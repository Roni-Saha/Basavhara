<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familyhouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flatname');
            $table->string('location');
            $table->string('size');
            $table->string('image');
            $table->float('rent');
            $table->integer('bedroom');
            $table->integer('drawingroom');
            $table->integer('diningroom');
            $table->integer('storeroom');
            $table->integer('kitchen');
            $table->integer('balcony');
            $table->integer('attachroom');
            $table->integer('commonroom');
            $table->integer('floorlevel');
            $table->float('securitydeposite');
            $table->string('ownername');
            $table->integer('mobileno');
            $table->string('email');
            $table->string('owneraddress');
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
        Schema::dropIfExists('familyhouses');
    }
}
