<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grouprole extends Model
{
    use HasFactory;
    protected $fillable = [
        'caas_id',
        'roles_id',
        'created_at',
        'updated_at',
    ];


    public function datacaas()
    {
        return $this->belongsTo(Datacaas::class, 'caas_id');
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class, 'roles_id');
    }

}
