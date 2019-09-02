<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuneInstrumentsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tune_instrument_ex', function (Blueprint $table) {
            $table->integer('instrumentNo')->unsigned();
			$table->primary('instrumentNo');
            $table->string('inpiutFrequency');
            $table->string('predefinedFrequency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tune_instruments_ex');
    }
}
