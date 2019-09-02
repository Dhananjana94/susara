<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_lessons', function (Blueprint $table) {
            $table->unsignedInteger('lessonNo');
            $table->foreign('lessonNo')->references('lessonNo')->on('lessons');

            $table->unsignedInteger('customerId');
            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_lessons');
    }
}
