<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix'=> 55,
            'number'=> 12345678,
            'user_id'=> 1
        ]);
        Phone::create([
            'prefix'=> 13,
            'number'=> 512345,
            'user_id'=> 1
        ]);
    }
}
