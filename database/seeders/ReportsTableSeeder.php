<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reports')->delete();
        
        \DB::table('reports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'survey_id' => 1,
                'content' => 'error',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'survey_id' => 1,
                'content' => 'He thong bi loi roi',
                'created_at' => '2023-03-04 18:45:59',
                'updated_at' => '2023-03-04 18:45:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'survey_id' => 1,
                'content' => 'He thong bi loi roi nguoi oi',
                'created_at' => '2023-03-04 18:47:19',
                'updated_at' => '2023-03-04 18:47:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'survey_id' => 1,
                'content' => 'Cau hoi thu 2 kho qua',
                'created_at' => '2023-03-04 18:48:36',
                'updated_at' => '2023-03-04 18:48:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'survey_id' => 1,
                'content' => 'Bai khao sat chat luong cao',
                'created_at' => '2023-03-05 16:35:41',
                'updated_at' => '2023-03-05 16:35:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'survey_id' => 1,
                'content' => 'He thong bi loi roi nguoi oi',
                'created_at' => '2023-03-06 01:56:24',
                'updated_at' => '2023-03-06 01:56:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}