<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerphonenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerphonenos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phoneNo');
            $table->string('nic');
            $table->string('email');
            $table->string('password');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customerphonenos');
    }
}
