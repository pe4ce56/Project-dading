<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationExperienceCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_experience_careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('career_id');
            $table->string('organization_name', 100);
            $table->date('entry_date');
            $table->date('out_date');
            $table->string('positon', 30);
            $table->string('description', 200);
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
        Schema::dropIfExists('organization_experience_careers');
    }
}
