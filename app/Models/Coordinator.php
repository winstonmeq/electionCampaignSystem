<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;

    protected $table = 'coordinators';


    protected $fillable = [            
    
    'id',
    'username',
    'password',    
    'fname',
    'lname',
    'purok',
    'brgy',
    'mun',
    'userId',
    'contact_no',

  
    ];


}
