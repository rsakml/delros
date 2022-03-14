<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('contact')->insert([
            [
            'nama' => 'Della Jannata F',
            'email' => 'del@gmail.com',
            'message' => 'Hallo Della'
            ],
            [
            'nama' => 'Rossa Akmalia',
            'email' => 'ros@gmail.com',
            'message' => 'Hallo Rossa'
            ]
        ]);
    }
}
