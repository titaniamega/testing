<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Skillsets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_sets', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->integer('candidates_id');
            $table->integer('skills_id');
            $table->index('candidates_id');
            $table->index('skills_id');
            $table->foreign('candidates_id')->references('id')->on('candidates');
            $table->foreign('skills_id')->references('id')->on('skills');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_sets');
    }
}
