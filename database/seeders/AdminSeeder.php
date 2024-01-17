<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => 1,
            'name' => 'Dhiya Isnavisa',
            'ascod' => 'DHY',
            'password' => bcrypt('bodrexflu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 2,
            'name' => 'Aliza Nurfitrian Meizahra',
            'ascod' => 'ALL',
            'password' => bcrypt('bodrexflu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 3,
            'name' => 'Dhea Aisyah Putri',
            'ascod' => 'DEY',
            'password' => bcrypt('bodrexflu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 4,
            'name' => 'Junaidi Rahmat',
            'ascod' => 'JIN',
            'password' => bcrypt('bodrexflu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('admins')->insert([
            'id' => 5,
            'name' => 'Muh Zaidan Fauzan',
            'ascod' => 'FYN',
            'password' => bcrypt('bodrexflu'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
