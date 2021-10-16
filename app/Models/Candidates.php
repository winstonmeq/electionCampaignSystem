<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [            
    
    'id',
    'canName',
    'canPosition',
    'mapCode',
    'oppenent',
    'mine',
    'hold',    
    'total',
    'munName',    
    'barName',   
    'userId'


    ];
}
