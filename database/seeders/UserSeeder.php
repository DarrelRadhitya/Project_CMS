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
                'name' => 'Darrel',
                'email' => 'darrel@gmail.com',
                'password' => Hash::make('Darrel123'),
            ],
            [
                'name' => 'Axelle',
                'email' => 'axelle@gmail.com',
                'password' => Hash::make('Axelle123'),
            ],
        ]);
    }
}
