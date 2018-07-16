<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpBenefitInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_benefit_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_basic_info_id');
            $table->string('sss_num')->nullable();
            $table->string('pagibig_num')->nullable();
            $table->string('philhealth_num')->nullable();
            $table->string('tin_num')->nullable();
            $table->string('payroll_account')->nullable();
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
        Schema::dropIfExists('emp_benefit_info');
    }
}
