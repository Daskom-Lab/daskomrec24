<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotting extends Model
{
    use HasFactory;
    protected $table = 'plottings';
    

    protected $fillable = [
        'isPlotActive',
        'caas_id', 
        'shift_id',
        'created_at',
        'updated_at',
    ];

    public function datacaas()
    {
        return $this->belongsTo(Datacaas::class, 'caas_id');
    }

    public function shifts()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }
}
