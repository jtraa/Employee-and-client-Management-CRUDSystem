<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
{
    Schema::create('employees', function (Blueprint $table)
    {
        $table-> bigIncrements('id');   //table id
        $table-> string('name'); 
        $table-> string('surname'); 
        $table->unsignedBigInteger('company_id')->index();   //Company id, UNDERSCORE ipv -. De - teken kan problemen geven in php.
        $table-> string('email')->nullable(); 
        $table-> string('telephone')->nullable(); 
        $table->timestamps();
        $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade'); // Dit linkt de id met de tabel. On delete verwijder de data.
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
