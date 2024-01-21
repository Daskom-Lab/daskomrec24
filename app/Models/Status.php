<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'caas_id',
        'stages_id',
        'isPass',
        'created_at',
        'updated_at',
    ];

    public function datacaas(){
        return $this->belongsTo(Datacaas::class, 'caas_id');
    }

    public function stages(){
        return $this->belongsTo(Stage::class, 'stages_id');
    }


    public function ispass()
    {
        return Status::where('isPass', 1)->get()->count();
    }

    public function isfailed()
    {
        return Status::where('isPass', 0)->get()->count();
    }

    public function total()
    {
        return Status::all()->count();
    }
}