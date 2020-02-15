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
        Schema::create('last_education_carrers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('level', 10);
            $table->string('institution', 100);
            $table->string('city', 50);
            $table->string('majors', 50);
            $table->integer('ipk');
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
        Schema::dropIfExists('tbl_history_career');
    }
}
