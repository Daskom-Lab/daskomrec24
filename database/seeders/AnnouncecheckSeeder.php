<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncecheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcechecks')->insert([
            'id' => 1,
            'isMessageActive' => 0,
            'isPlotActive' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
