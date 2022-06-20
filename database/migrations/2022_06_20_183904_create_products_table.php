<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('productCode');
            $table->string('productName');
            $table->string('productLine');
            $table->string('productScale');
            $table->string('productVendor');
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->float('buyPrice');
            $table->float('MSRP');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
