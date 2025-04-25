<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'pass' => 'pass',
                'description' => 'Admin',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Admin 2',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('123456'),
                'pass' => 'pass',
                'description' => null,
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'pass' => 'pass',
                'description' => null,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Jane',
                'username' => 'jane',
                'email' => 'jane@gmail.com',
                'password' => bcrypt('123456'),
                'pass' => 'pass',
                'description' => null,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'john',
                'username' => 'john',
                'email' => 'john@gmail.com',
                'password' => bcrypt('123456'),
                'pass' => 'pass',
                'description' => null,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($datas);
    }
}
