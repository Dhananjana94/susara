<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments_ex', function (Blueprint $table) {
            $table->integer('instrumentId')->unsigned();
			      $table->primary('instrumentId');
            $table->string('category');
            $table->double('price');
            $table->timestamps();
            // $table->integer('adminId')->unsigned();
            // $table->foreign('adminId')->references('adminId')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instrument_ex');
    }
}
