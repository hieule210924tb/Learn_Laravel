<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // -Cách thêm data thủ công
        // DB::table('users')->insert([[
        //    'name' => 'testSeeder4',
        //    'email' => 'seeder4@gmail.com',
        //     'password' => password_hash('123456',PASSWORD_DEFAULT),
        //    'created_at' => now()
        // ],[
        //    'name' => 'testSeeder5',
        //    'email' => 'seeder5@gmail.com',
        //    'password' => password_hash('12345678', PASSWORD_DEFAULT),
        //    'created_at' => now()
        // ]]);
        

        // -Cách thêm bằng thư viện
        User::Factory()->count(1)->create(); // count số dòng dữ liệu muốn thêm
    }
}