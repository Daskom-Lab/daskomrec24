<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'id' => 1,
            'stagesName' => 'Administrasi',
            'isActive' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 2,
            'stagesName' => 'Tes Tulis & Coding',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 3,
            'stagesName' => 'Wawancara',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 4,
            'stagesName' => 'Tugas Kecil',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 5,
            'stagesName' => 'Teaching',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 6,
            'stagesName' => 'Upgrading',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stages')->insert([
            'id' => 6,
            'stagesName' => 'Final Upgrading',
            'isActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
