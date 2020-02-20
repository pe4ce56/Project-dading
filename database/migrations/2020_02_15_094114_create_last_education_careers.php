<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastEducationCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_education_careers', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');;
            $table->string('level', 10);
            $table->string('institution', 100);
            $table->string('city_of_institution', 50);
            $table->string('majors', 50);
            $table->integer('ipk');
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
        Schema::dropIfExists('tbl_history_career');
    }
}
