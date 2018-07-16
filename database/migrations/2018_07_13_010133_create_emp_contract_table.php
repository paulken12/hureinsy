<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_basic_info_id');
            $table->string('master_company_key');
            $table->date('contract_start');
            $table->date('contract_end');
            $table->string('employment_status');
            $table->date('resigned_date')->nullable();
            $table->string('master_department_key');
            $table->string('master_job_type_key');
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
        Schema::dropIfExists('emp_contract');
    }
}
