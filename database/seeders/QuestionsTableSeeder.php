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
                'id' => 6,
                'survey_id' => 1,
                'content' => 'Giới tính',
                'type' => -1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'survey_id' => 1,
                'content' => 'Số điện thoại liên lạc',
                'type' => -3,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
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
            6 => 
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
            7 => 
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
            8 => 
            array (
                'id' => 14,
                'survey_id' => 1,
                'content' => 'Cơ quan bạn thuộc khối ngành nào?',
                'type' => -2,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'survey_id' => 3,
                'content' => '1 + 1 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'survey_id' => 3,
                'content' => '4 * 3 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'survey_id' => 3,
                'content' => '550 / 2 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'survey_id' => 3,
                'content' => '1000 - 6 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'survey_id' => 3,
                'content' => '123 + 321 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'survey_id' => 3,
                'content' => '12 + 13 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'survey_id' => 3,
                'content' => '1 + 4 / 2 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'survey_id' => 3,
                'content' => '|x| = 5',
                'type' => 2,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'survey_id' => 3,
                'content' => '10 / 2 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'survey_id' => 3,
                'content' => '4 + 2 = ?',
                'type' => 1,
                'essay_correct_answer' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'survey_id' => 9,
                'content' => 'Bạn nên nhập okela để được 10 điểm',
                'type' => 3,
                'essay_correct_answer' => 'okela',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}