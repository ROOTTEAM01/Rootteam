<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('full_name');
            $table->tinyInteger('age');
            $table->string('phone',20);
            $table->string('email');
            $table->string('course_type',40);
            $table->string('confirm_type',40);
            $table->string('agree_term',60);
            $table->text('comment');
            $table->tinyInteger('mail_sended')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
