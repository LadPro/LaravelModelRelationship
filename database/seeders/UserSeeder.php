<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name' => 'Pedro',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'id'=>2,
            'name' => 'Jose',
            'email' => 'noadmin@localhost',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'id'=>3,
            'name' => 'Jesus',
            'email' => 'tuculito@localhost',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'id'=>4,
            'name' => 'Maria',
            'email' => 'tusnalgas@localhost',
            'password' => bcrypt('admin'),
        ]);
    }
}
