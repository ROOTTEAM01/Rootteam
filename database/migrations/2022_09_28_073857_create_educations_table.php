<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_students_id');
            $table->foreign('cv_students_id')->references('id')->on('cv_students')->cascadeOnDelete();
            $table->string('specialization');
            $table->string('education');
            $table->text('description')->nullable();
            $table->string('begin_month');
            $table->year('begin_year');
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
        Schema::dropIfExists('educations');
    }
}
