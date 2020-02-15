<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperienceCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experience_careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('career_id');
            $table->string('company_name', 100);
            $table->date('entry_date');
            $table->date('out_date');
            $table->string('positon', 30);
            $table->bigInteger('salary');
            $table->string('reference_HRD', 100);
            $table->string('phone_number_HRD', 15);
            $table->timestamps();
            $table->foreign('career_id')->references('id')->on('detail_careers')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_work_experience_career');
    }
}
