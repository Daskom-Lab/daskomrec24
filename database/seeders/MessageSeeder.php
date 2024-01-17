<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'id' => 1,
            'pass_msg' => 'Selamat kamu lolos tahap ini',
            'failed_msg' => 'Maaf kamu gagal tahap ini',
            'link' => 'gausah aneh2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
