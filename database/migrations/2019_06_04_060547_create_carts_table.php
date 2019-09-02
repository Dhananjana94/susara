<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->integer('cartId')->unsigned();
            $table->primary('cartId');
            $table->string('itemName');
            $table->double('totalAmount');
        });

        Schema::table('carts', function($table) {
            
            $table->unsignedInteger('cashierId');
            $table->foreign('cashierId')->references('cashierId')->on('cashiers');

            $table->unsignedInteger('adminId');
            $table->foreign('adminId')->references('adminId')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
