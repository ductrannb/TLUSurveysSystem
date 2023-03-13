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
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'name' => 'Khảo sát hiện trạng văn hóa đọc của sinh viên',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'name' => 'Kiểm tra toán nâng cao',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
            'name' => 'Phiếu khảo sát về hoạt động trong thời gian học và thi online (Học kì 2 năm học 2020-2021)',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'name' => 'Thư viện khảo sát ý kiến bạn đọc',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'name' => 'Khảo sát ý kiến về chuyến thăm quan bảo tàng lịch sử',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'name' => 'Phiếu đăng ký tham dự hội thảo "TLU Go Go"',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'name' => 'Góp ý về hoạt động của thư viện đại học Thủy Lợi',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'name' => 'Khảo sát 1',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'name' => 'Khảo sát 2',
                'start_at' => '2022-12-12 00:00:00',
                'end_at' => '2023-12-12 00:00:00',
                'type' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'name' => 'Khảo sát 3',
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