<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafProposedChangeJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_proposed_change_job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->string('proposed_key_department')->nullable();
            $table->string('user_id')->nullable();
            $table->string('proposed_key_position_title')->nullable();
            $table->string('proposed_key_project_assignment')->nullable();
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
        Schema::dropIfExists('paf_proposed_change_job_details');
    }
}
