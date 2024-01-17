<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'roleName' => 'Villager',
            'desc' => 'manusia biasa',
            'profilepic' => 'villager.png',
            'character_photo' => 'villager.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'roleName' => 'Black Smith',
            'desc' => 'Kang rakit',
            'profilepic' => '/assets/admin/images/DLOR/char/Black Smith.png',
            'character_photo' => '/assets/admin/images/DLOR/char/Black Smith.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'roleName' => 'Seeker',
            'desc' => 'aib hunter',
            'profilepic' => '/assets/admin/images/DLOR/char/Seeker.png',
            'character_photo' => '/assets/admin/images/DLOR/char/Seeker.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'roleName' => 'Guild Master',
            'desc' => 'penjaga guild',
            'profilepic' => '/assets/admin/images/DLOR/char/Guild Master.png',
            'character_photo' => '/assets/admin/images/DLOR/char/Guild Master.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'roleName' => 'Preceptor',
            'desc' => 'peramal kemampuan',
            'profilepic' => '/assets/admin/images/DLOR/char/Preceptor.png',
            'character_photo' => '/assets/admin/images/DLOR/char/Preceptor.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('roles')->insert([
            'id' => 6,
            'roleName' => 'Guardian',
            'desc' => 'Pelindung diri sendiri',
            'profilepic' => '/assets/admin/images/DLOR/char/Guardian.png',
            'character_photo' => '/assets/admin/images/DLOR/char/Guardian.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
