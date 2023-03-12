<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('surveys')->delete();

        \DB::table('surveys')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'KHẢO SÁT Ý KIẾN CỰU SINH VIÊN TRƯỜNG ĐẠI HỌC THỦY LỢI',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
