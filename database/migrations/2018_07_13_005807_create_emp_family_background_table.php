<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpFamilyBackgroundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_family_background', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_basic_info_id')->nullable();
            $table->string('master_family_key')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('master_gender_key')->nullable();
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
        Schema::dropIfExists('emp_family_background');
    }
}
