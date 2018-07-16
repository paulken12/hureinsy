<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpJobDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_job_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('master_department_key');
            $table->integer('master_job_title_key');
            $table->integer('master_team_key');
            $table->integer('master_employee_status_key');
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
        Schema::dropIfExists('emp_job_detail');
    }
}
