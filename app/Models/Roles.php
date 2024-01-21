<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'roleName',
        'desc',
        'character_photo',
        'profilepic',
        'created_at',
        'updated_at',
    ];
}
