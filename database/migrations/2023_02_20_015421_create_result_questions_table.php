<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('result_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('result_id');
            $table->unsignedBigInteger('question_id');
            $table->integer('answer_id'); // >=0 nếu là câu hỏi trắc nghiệm, -1 nếu là câu hỏi tự luận
            $table->string('essay_answer'); // empty nếu là câu hỏi trắc nghiệm
            $table->foreign('result_id')->references('id')->on('results');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('answer_id')->references('id')->on('answers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_questions');
    }
};
