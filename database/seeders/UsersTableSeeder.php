<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'username' => 'duc',
                'password' => '$2y$10$RoUbvip1wA6v1Rs2S/OHFuYcWAyqSa94hJ7iHQcIsMbSEJNQHA6Sy',
                'fullname' => 'Trần Xuân Đức',
                'email' => 'xduc24122002@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'username' => 'ngocanh',
                'password' => '$2y$10$RoUbvip1wA6v1Rs2S/OHFuYcWAyqSa94hJ7iHQcIsMbSEJNQHA6Sy',
                'fullname' => 'Vũ Ngọc Anh',
                'email' => 'vngocanh732@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'username' => 'dung',
                'password' => '$2y$10$RoUbvip1wA6v1Rs2S/OHFuYcWAyqSa94hJ7iHQcIsMbSEJNQHA6Sy',
                'fullname' => 'Hoàng Đình Dũng',
                'email' => 'vehoang2k2@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'username' => 'hung',
                'password' => '$2y$10$RoUbvip1wA6v1Rs2S/OHFuYcWAyqSa94hJ7iHQcIsMbSEJNQHA6Sy',
                'fullname' => 'Đỗ Duy Hưng',
                'email' => 'doduyhungtvb002@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'username' => 'brasell4',
                'password' => 'PzhVIkfV1VFv',
                'fullname' => 'Nguyễn Thanh Tùng',
                'email' => 'srasell4@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'username' => 'rsmylie5',
                'password' => 'FjYXXRjEq',
                'fullname' => 'Lê Trung Sơn',
                'email' => 'psmylie5@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'username' => 'kgaytor6',
                'password' => 'CzQg9HrMSP',
                'fullname' => 'Phan Vương Anh',
                'email' => 'fgaytor6@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'username' => 'gconkay7',
                'password' => 'FGYVyery3B6',
                'fullname' => 'Phạm Tiến Hiệp',
                'email' => 'dconkay7@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'username' => 'avaughton8',
                'password' => 'L1Dio8tgD',
                'fullname' => 'Phan Thu Linh',
                'email' => 'yvaughton8@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'username' => 'cfransson9',
                'password' => '2MrXQw',
                'fullname' => 'Nguyễn Văn Thành',
                'email' => 'vfransson9@webeden.gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'username' => 'aspellera',
                'password' => 'jlJOSs0uu4',
                'fullname' => 'Bùi Huy Sáng',
                'email' => 'mspellera@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'username' => 'rcallacherb',
                'password' => 'SHKyRwXd1',
                'fullname' => 'Hoàng Trung Dũng',
                'email' => 'fcallacherb@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'username' => 'glardinerc',
                'password' => 'ZqBciEBEhiq',
                'fullname' => 'Phạm Thành Đạt',
                'email' => 'elardinerc@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'username' => 'atollitd',
                'password' => 'DIgUM45M',
                'fullname' => 'Đỗ Đức Anh',
                'email' => 'ctollitd@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'username' => 'ipaytone',
                'password' => 'WNLeebxXk',
                'fullname' => 'Lương Thị Lệ Thúy',
                'email' => 'apaytone@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'username' => 'mlengletf',
                'password' => 'fBejqaW6',
                'fullname' => 'Bùi Hữu Nghĩa',
                'email' => 'olengletf@ocn.gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'username' => 'lsolomonidesg',
                'password' => 'CcG92x9',
                'fullname' => 'Lê Hải Long',
                'email' => 'ssolomonidesg@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'username' => 'thambletth',
                'password' => '5ymLWR',
                'fullname' => 'Vũ Văn Tuấn',
                'email' => 'bhambletth@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'username' => 'pwillocki',
                'password' => 'VsSlrmG',
                'fullname' => 'Lương Quang Long',
                'email' => 'dwillocki@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'username' => 'mpoupardj',
                'password' => '4K1yiZmfF',
                'fullname' => 'Phạm Quang Minh',
                'email' => 'jpoupardj@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'username' => 'aminifiek',
                'password' => 'nWPUPc6nk',
                'fullname' => 'Trần Văn Quang',
                'email' => 'rminifiek@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'username' => 'mhucksl',
                'password' => 'Erxf98O',
                'fullname' => 'Phạm Ngọc Anh',
                'email' => 'khucksl@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'username' => 'aberendsm',
                'password' => 'k5mDpuNVF9',
                'fullname' => 'Đỗ Thu Trà',
                'email' => 'yberendsm@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'username' => 'mcorkettn',
                'password' => 'PFRmcXUw8bg',
                'fullname' => 'Nguyễn Đức Dương',
                'email' => 'gcorkettn@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'username' => 'jstoddarto',
                'password' => 'OuXINz',
                'fullname' => 'Phạm Quang Huy',
                'email' => 'nstoddarto@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'username' => 'cgreenhaughp',
                'password' => 'jJHYAvagX',
                'fullname' => 'Trần Việt Anh',
                'email' => 'dgreenhaughp@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'username' => 'imarrisonq',
                'password' => '3FrxD7dad',
                'fullname' => 'Phạm Thị Thu Hương',
                'email' => 'kmarrisonq@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'username' => 'kgunbyr',
                'password' => 'WKs1anEoc',
                'fullname' => 'Lê Vi Khánh',
                'email' => 'kgunbyr@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'username' => 'trikkards',
                'password' => 'UjUSD0dwJvq',
                'fullname' => 'Nguyễn Mạnh Tùng',
                'email' => 'crikkards@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'username' => 'rbrannit',
                'password' => 'f0cWHNiF6',
                'fullname' => 'Bùi Ngọc Long',
                'email' => 'bbrannit@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'username' => 'bfleckneyu',
                'password' => '92H1Zpfx',
                'fullname' => 'Trần Mạnh Cường',
                'email' => 'cfleckneyu@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'username' => 'bsalsbergv',
                'password' => 'ovwjBB',
                'fullname' => 'Nguyễn Văn Tuấn Đạt',
                'email' => 'msalsbergv@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'username' => 'bchoulertonw',
                'password' => '0sAGKi',
                'fullname' => 'Nguyễn Bá Tĩnh',
                'email' => 'bchoulertonw@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'username' => 'hadkinx',
                'password' => 'yIbyHIun',
                'fullname' => 'Nguyễn Thị Phương',
                'email' => 'tadkinx@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'username' => 'spicketty',
                'password' => 'c05nWY',
                'fullname' => 'Đào Thị Hồng Nhung',
                'email' => 'qpicketty@google.gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'username' => 'ydignumz',
                'password' => 'R4egSQ3cSO',
                'fullname' => 'Vũ Thanh Nga',
                'email' => 'adignumz@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'username' => 'tdur10',
                'password' => 'gT7ZFIZk',
                'fullname' => 'Nguyễn Thành Chung',
                'email' => 'mdur10@t-gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'username' => 'spadley11',
                'password' => 'ghZMIfZN1',
                'fullname' => 'Phạm Thị Sim',
                'email' => 'bpadley11@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'username' => 'amacelane12',
                'password' => 'JCuBLi4VSKbR',
                'fullname' => 'Nguyễn Thiên Tú',
                'email' => 'amacelane12@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'username' => 'splait13',
                'password' => 'iecDpVxmTooP',
                'fullname' => 'Cồ Huy Anh',
                'email' => 'cplait13@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'username' => 'mreeks14',
                'password' => 'ztgrQjZ',
                'fullname' => 'Bùi Hải Giang',
                'email' => 'treeks14@sina.gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'username' => 'dcarlill15',
                'password' => 'swT3xRGN',
                'fullname' => 'Nguyễn Thị Lê',
                'email' => 'hcarlill15@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'username' => 'zheister16',
                'password' => 'wpARKAH59u6i',
                'fullname' => 'Bùi Trung Đức',
                'email' => 'pheister16@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'username' => 'tmathieu17',
                'password' => 'svUmwpkfNoEx',
                'fullname' => 'Đinh Quý Dương',
                'email' => 'bmathieu17@shop-gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'username' => 'cboundey18',
                'password' => 'nvdBK1QFpmS',
                'fullname' => 'Bùi Minh Phúc',
                'email' => 'eboundey18@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'username' => 'lkaminski19',
                'password' => 'C0bDkN4Mfs',
                'fullname' => 'Vũ Tiến Hùng',
                'email' => 'jkaminski19@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'username' => 'kbenfield1a',
                'password' => 'I8HB4Iw',
                'fullname' => 'Phạm Duy Linh',
                'email' => 'tbenfield1a@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'username' => 'ehowlings1b',
                'password' => 'cdWqgZ',
                'fullname' => 'Ngô Thọ Nam',
                'email' => 'chowlings1b@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'username' => 'chambling1c',
                'password' => 'qvn3l8rG',
                'fullname' => 'Lương Tuấn Kiệt',
                'email' => 'thambling1c@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'username' => 'hboydon1d',
                'password' => '0vogLIr',
                'fullname' => 'Nguyễn Văn Hiếu',
                'email' => 'mboydon1d@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
