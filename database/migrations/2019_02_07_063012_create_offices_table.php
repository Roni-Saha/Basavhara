<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flatname');
            $table->string('location');
            $table->string('size');
            $table->string('image');
            $table->float('rent');
            $table->integer('tottalroom');
            $table->integer('bathroom');
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
        Schema::dropIfExists('offices');
    }
}
