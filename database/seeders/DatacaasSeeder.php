<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatacaasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datacaas')->insert([
            'id' => 1,
            'name' => 'Dhidi aja',
            'email' => 'Ibqoq@example.com',
            'nim' => '1101224329',
            'major' => 'TEKNIK TELEKOMUNIKASI',
            'class' => 'TT-46-13',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
