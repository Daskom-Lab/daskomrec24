<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = 'admins';

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable = [
        'name',
        'ascod',
        'password',
        'created_at',
        'updated_at',
    ];

    public function announcecheck(){
        return Announcecheck::first();
    }

    public function stages()
    {
        return Stage::where('isActive', 1)->first();
    }
}
