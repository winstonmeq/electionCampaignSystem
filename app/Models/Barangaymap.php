<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangaymap extends Model
{
    use HasFactory;

    protected $table = 'barangaymaps';

    protected $casts = ['polygons'=>'array'];

    protected $fillable = [            
    
    'id',
    'mapName',
    'polygons',
    'userId'

    ];
}
