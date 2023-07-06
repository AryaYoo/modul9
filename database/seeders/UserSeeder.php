<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            [
                'name' => 'Purnama',
                'email' => 'purnama.anaking@gmail.com',
                'password'=> bcrypt('purnama.anaking@gmail.com'),
            ],
            [
                'name' => 'jetex10',
                'email' => 'jetex@gmail.com',
                'password'=> bcrypt('jetex'),
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password'=> bcrypt('adminadmin'),
            ],

        ]);
    }
}
