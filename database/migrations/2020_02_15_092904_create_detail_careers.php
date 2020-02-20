<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_careers', function (Blueprint $table) {
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('applied_position', 100);
            $table->string('gender', 15);
            $table->string('marital_status', 15);
            $table->string('place_of_birth', 30);
            $table->date('date_of_birth');
            $table->integer('height');
            $table->integer('weight');
            $table->string('religion', 15);
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
        Schema::dropIfExists('tbl_detail_career');
    }
}
