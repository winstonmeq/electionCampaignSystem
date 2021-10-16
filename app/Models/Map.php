<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $table = 'maps';

    protected $casts = ['polygons'=>'array'];

    protected $fillable = [            
    
    'id',
    'brgyname',
    'lat',
    'long',
    'polygon',
    'threshold',
    'total',
    'userId',
    'coordinator',


    ];
    

    public function geometries()
    {
        return $this->hasOne(Geometry::class);
    }

}
