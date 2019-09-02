<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersPhoneNosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_phone_nos', function (Blueprint $table) {
            $table->unsignedInteger('customerId');
			$table->primary('customerId');
            $table->string('phoneNo');
            $table->string('nic');
            $table->string('email');
            $table->string('password');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_phone_nos');
    }
}
