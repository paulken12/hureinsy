<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafProposedChangeCompensationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_proposed_change_compensation_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('proposed_salary')->nullable();
            $table->string('proposed_bonus_allowance')->nullable();
            $table->string('proposed_benefits')->nullable();
            $table->string('proposed_remarks_hr')->nullable();
            $table->string('proposed_remarks_exec')->nullable();
            $table->timestamps();

            $table->foreign('request_id')
                ->references('id')
                ->on('paf_nature_of_actions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paf_proposed_change_compensation_details');
    }
}
