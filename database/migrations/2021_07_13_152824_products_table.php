<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->integer('product_code')->unique();
            $table->string('product_name', 255);
            $table->string('product_line', 255);
            $table->foreign('product_line')->references('product_line')->on('productlines');
            $table->string('product_scale', 255);
            $table->string('product_vendor', 255);
            $table->string('product_description', 255);
            $table->integer('quantity_inStock');
            $table->float('price');
            $table->text('MSRP');
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
        Schema::dropIfExists('products');
    }
}
