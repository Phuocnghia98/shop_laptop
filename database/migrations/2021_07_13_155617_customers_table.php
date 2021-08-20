<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id_customers');
            $table->string('customer_number', 20);
            $table->string('customer_name', 50);
            $table->string('contact_lastName', 50);
            $table->string('contact_firstName', 50);
            $table->string('phone', 50);
            $table->string('address_line1', 50);
            $table->string('address_line2', 50);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('postal_code', 50);
            $table->string('country', 50);
            $table->integer('sales_repEmployeeNumber');
            $table->float('credit_limit');
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
        Schema::dropIfExists('customers');
    }
}
