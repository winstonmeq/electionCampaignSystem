<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;


    protected $table = 'voters';


    protected $fillable = [            
    
    'id',
    'coordinatorId',
    'fname',
    'lname',
    'purok',
    'contact_no',
    'lat',
    'lng',

    'governor',
    'viceGovernor',
    'boardMember1',
    'boardMember2',
    'boardMember3',
    'boardMember4',
    'boardMember5',
    'boardMember6',
    'boardMember7',
    'boardMember8',
    
     'mayor',
     'viceMayor',
     'munCouncilor1',
     'munCouncilor2',
     'munCouncilor3',
     'munCouncilor4',
     'munCouncilor5',
     'munCouncilor6',
     'munCouncilor7',
     'munCouncilor8',

     'userId'

    ];










}
