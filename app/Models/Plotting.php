<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotting extends Model
{
    use HasFactory;
    protected $fillable = [
        'caas_id', 'shift_id'
    ];
}
