<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpEducationalBackgroundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_educational_background', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_basic_info_id');
            $table->string('master_education_key');
            $table->string('course')->nullable();
            $table->string('name_of_school')->nullable();
            $table->string('year_graduated')->nullable();
            $table->string('award')->nullable();
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
        Schema::dropIfExists('emp_educational_background');
    }
}
