<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image', 255); //http://hotimage.com/abc.png | abc.png
            $table->integer('id_product');
            $table->timestamps();
        });

        // Schema::create('images', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('image', 255); //http://hotimage.com/abc.png | abc.png
        //     $table->integer('imageable_id ');
        //     $table->string('imageable_type', 255); //posts | users | offices | product
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image');
    }
}
