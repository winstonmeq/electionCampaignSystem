<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geometry extends Model
{
    use HasFactory;

    protected $table = 'geometries';

    protected $casts = ['geometries'=>'array'];

    protected $fillable = [            
    

    'id',
    'brgyId',
    'lat',
    'long',
  

    ];
    
    public function maps()
    {
        return  $this->belongsTo(Map::class);
    }
}
