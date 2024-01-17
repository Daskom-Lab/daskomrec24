<?php

namespace App\Imports;

use App\Models\DataCaas;
use App\Models\Grouprole;
use App\Models\Status;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class CaasImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $len = count($rows);
        foreach ($rows as $row) {
            $id = Datacaas::insertGetId([
                'nim' => $row[0],
                'name' => $row[1],
                'email' => $row[2],
                'major' => $row[3],
                'class' => $row[4],
                'password' => Hash::make($row[0] . "2024"),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < $len; $i++) {
            $uid = $id - $i;
            Status::insert([
                'caas_id' => $uid,
                'stages_id' => 1,
                'isPass' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < $len; $i++) {
            $uid = $id - $i;
            Grouprole::insert([
                'caas_id' => $uid,
                'roles_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
