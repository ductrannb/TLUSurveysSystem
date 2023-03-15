<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_results', function (Blueprint $table) {
            $table->unsignedBigInteger('result_id');
            $table->unsignedBigInteger('survey_id');
            $table->string('fullname');
            $table->string('student_id');
            $table->string('email');
            $table->primary('survey_id', 'student_id');
            $table->foreign('result_id')->references('id')->on('results');
            $table->foreign('survey_id')->references('id')->on('surveys');
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
        Schema::dropIfExists('info_results');
    }
};
