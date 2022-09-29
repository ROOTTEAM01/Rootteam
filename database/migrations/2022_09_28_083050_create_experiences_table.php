<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_students_id');
            $table->foreign('cv_students_id')->references('id')->on('cv_students')->cascadeOnDelete();
            $table->string('job_title');
            $table->string('company');
            $table->text('description')->nullable();
            $table->string('start_month');
            $table->year('start_year');
            $table->string('end_month');
            $table->year('end_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
