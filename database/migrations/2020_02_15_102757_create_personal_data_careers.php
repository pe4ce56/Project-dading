<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDataCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data_careers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('description_career', 300);
            $table->string('vision_mision_career', 300);
            $table->string('plan', 300);
            $table->timestamps();
            $table->foreign('id')->references('id')->on('detail_careers')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_data_careers');
    }
}
