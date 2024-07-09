<?php

namespace Database\Seeders;

use App\Models\Role;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::Create([
            'id'=>1,
            'name' => 'admin'
        ]);
        Role::Create([
            'id'=>2,
            'name' => 'user'
        ]);
        Role::Create([
            'id'=>3,
            'name' => 'staff'
        ]);
        Role::Create([
            'id'=>4,
            'name' => 'invited'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'jose'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
            'added_by' => 'jose'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
            'added_by' => 'jose'
        ]);
        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 4,
            'added_by' => 'jose'
        ]);
    }
}
