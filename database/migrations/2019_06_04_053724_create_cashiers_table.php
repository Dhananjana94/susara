<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->increments('cashierId');
            $table->string('fname');
            $table->string('lname');
            $table->string('phoneNo');
            $table->string('no');
            $table->string('street');
            $table->string('city');
            $table->string('nic');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::table('cashiers', function($table) {
            
            $table->unsignedInteger('userId');
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');

            $table->unsignedInteger('adminId');
            $table->foreign('adminId')->references('adminId')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashiers');
    }
}
