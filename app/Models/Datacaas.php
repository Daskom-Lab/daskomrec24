<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Datacaas extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nim',
        'email',
        'password'
    ];
    protected $guard = 'datacaas';
    protected $table = 'datacaas';
    protected $hidden = [
        'password', 'remember_token'
    ];
}
