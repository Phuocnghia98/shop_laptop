<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id_employees');
            $table->integer('employee_number')->unique();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('extension', 50);
            $table->string('email', 50);
            $table->string('office_code', 50);
            $table->foreign('office_code')->references('office_code')->on('offices');
            $table->text('reports_to');
            $table->string('job_title', 50);
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
        Schema::dropIfExists('employees');
    }
}
