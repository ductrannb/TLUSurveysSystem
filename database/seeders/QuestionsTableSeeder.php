<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('questions')->delete();

        \DB::table('questions')->insert(array (
            0 =>
            array (
                'id' => 4,
                'survey_id' => 1,
                'content' => 'Họ và tên',
                'type' => 0,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 5,
                'survey_id' => 1,
                'content' => 'Mã sinh viên',
                'type' => 0,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 6,
                'survey_id' => 1,
                'content' => 'Email',
                'type' => 0,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 7,
                'survey_id' => 1,
                'content' => 'Số điện thoại liên lạc',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 8,
                'survey_id' => 1,
                'content' => 'Lớp khi tốt nghiệp',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 9,
                'survey_id' => 1,
                'content' => 'Khoa',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 10,
                'survey_id' => 1,
                'content' => 'Khóa học',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 11,
                'survey_id' => 1,
                'content' => 'Năm tốt nghiệp',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 12,
                'survey_id' => 1,
                'content' => 'Ngành học khi tốt nghiệp',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 13,
                'survey_id' => 1,
                'content' => 'Hiện đang công tác, học tập tại đâu?',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 14,
                'survey_id' => 1,
                'content' => 'Cơ quan bạn thuộc khối ngành nào?',
                'type' => 3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
