<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_careers', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('KTP', 50);
            $table->string('foto', 50);
            $table->string('ijasah', 50);
            $table->string('score', 50);
            $table->string('curriculum vitae', 50);
            $table->timestamps();
            $table->foreign('id')->references('id')->on('detail_careers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_careers');
    }
}
