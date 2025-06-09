<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Alex',
                'email' => 'admin1@example.com',
                'password' => Hash::make('Alex123'),
            ],
            [
                'name' => 'Bob',
                'email' => 'admin2@example.com',
                'password' => Hash::make('Bob123'),
            ],
        ]);
    }
}
