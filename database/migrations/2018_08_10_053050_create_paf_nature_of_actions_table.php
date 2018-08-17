<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafNatureOfActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_nature_of_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_company_id');
            $table->string('master_key_employment_status');
            $table->string('requested_by_company_id');
            $table->string('assessed_by_company_id');
            $table->string('approved_by_company_id');
            $table->string('comfirmed_by_company_id');
            $table->string('master_key_request_status');
            $table->string('master_key_sub_request_status');
            $table->string('remarks')->nullable();
            $table->date('date_effective');
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
        Schema::dropIfExists('paf_nature_of_actions');
    }
}
