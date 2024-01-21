<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'pass_msg',
        'failed_msg',
        'link',
        'created_at',
        'updated_at',
    ];
}
