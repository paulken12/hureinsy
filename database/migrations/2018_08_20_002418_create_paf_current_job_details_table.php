<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafCurrentJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_current_job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_company_id')->unsigned();
            $table->string('current_key_department')->nullable();
            $table->string('current_reports_to')->nullable();
            $table->string('current_key_position_title')->nullable();
            $table->string('current_key_project_assignment')->nullable();
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
        Schema::dropIfExists('paf_current_job_details');
    }
}
