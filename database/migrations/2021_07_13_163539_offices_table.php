<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id_office');
            $table->string('office_code', 50)->unique();
            $table->string('city', 50);
            $table->string('phone', 50);
            $table->string('address_line1', 50);
            $table->string('address_line2', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('postal_code', 50);
            $table->string('teritory', 50);
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
        Schema::dropIfExists('offices');
    }
}
