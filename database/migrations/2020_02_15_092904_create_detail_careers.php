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
            $table->bigIncrements('id');
            $table->string('username', 30);
            $table->string('name', 100);
            $table->string('applied_position', 30);
            $table->string('gender', 15);
            $table->string('date_of_birth', 30);
            $table->integer('height');
            $table->integer('weight');
            $table->string('religion', 15);
            $table->string('address', 50);
            $table->string('phone_number', 15);
            $table->string('telephone_number', 15);
            $table->timestamps();
            $table->foreign('username')->references('username')->on('careers')->onDelete('cascade');;
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
