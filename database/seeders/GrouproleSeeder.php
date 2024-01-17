<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrouproleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grouproles')->insert([
            'id' => 1,
            'caas_id' => 1,
            'roles_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
