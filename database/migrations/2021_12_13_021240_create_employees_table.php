<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->unique();  // nipp
            $table->string('full_name');
            $table->string('username');
            $table->string('email');
            $table->string('nik');
            $table->date('birthday');
            $table->enum('gender',['Male','Female','Divers']);
            $table->enum('marital_status',['Married','Single','Divorced','Widowed','Other']);
            $table->string('address');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('postal_code');
            $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('notes');
            $table->date('joined_date');
            $table->date('termination_date');
            $table->enum('status', ['Active', 'Terminated']);
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
