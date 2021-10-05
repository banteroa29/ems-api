<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('contact_number',255);
            $table->date('birth_date');
            $table->enum('marital_status', ['single','married','widowed','divorced']);
            $table->string('father_name',255);
            $table->string('mother_name',255);
            $table->string('hobbies',255);
            $table->string('blood_group',255);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('employee_id')->references('id')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_personals');
    }
}
