<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'administrator'
        ],

        [
            'name' => 'penulis',
            'email' => 'penulis@gmail.com',
            'password' => Hash::make('penulis123'),
            'role' => 'penulis'
        ],

        [
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('editor123'),
            'role' => 'editor'
        ],
    ]); 
    }
}
