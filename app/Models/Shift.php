<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'shift_name',
        'day',
        'start_hour',
        'end_hour',
        'quota',
        'created_at',
        'updated_at',
    ];
}
