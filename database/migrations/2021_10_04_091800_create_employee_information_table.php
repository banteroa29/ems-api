<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('designation_id')->nullable();
            $table->unsignedBigInteger('reporting_id')->nullable();
            $table->unsignedBigInteger('employee_status_id')->nullable();
            
            $table->decimal('salary',12,2);    
            $table->string('employee_number',255);
            $table->string('work_email');
            $table->date('join_date');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('designation_id')->references('id')->on('designations');
            $table->foreign('reporting_id')->references('id')->on('employees');
            $table->foreign('employee_status_id')->references('id')->on('employee_statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_information');
    }
}
