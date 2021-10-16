<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidatedata extends Model
{
    use HasFactory;

    protected $table = 'candidatedatas';

   

    protected $fillable = [            
    
    'id',
    'candidateName',
    'position',
    'address',
    'contactno'
     

    ];

}
