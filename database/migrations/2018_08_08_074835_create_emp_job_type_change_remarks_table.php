<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpJobTypeChangeRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_job_type_change_remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id');
            $table->string('job_type_from');
            $table->string('job_type_to');
            $table->string('remarks/comments');
            $table->string('updated_by');
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
        Schema::dropIfExists('emp_job_type_change_remarks');
    }
}
