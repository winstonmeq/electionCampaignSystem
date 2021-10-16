<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class munbar extends Model
{
    use HasFactory;

    protected $table = 'munbars';

   

    protected $fillable = [            
    
    'id',
    'munName',
    'barName', 
   

    ];
}
