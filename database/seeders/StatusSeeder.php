<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'id' => 1,
            'isPass' => 1,
            'caas_id' => 1,
            'stages_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
