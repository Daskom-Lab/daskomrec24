<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grouprole extends Model
{
    use HasFactory;
    protected $fillable = [
        'caas_id',
        'roles_id'
    ];
}
