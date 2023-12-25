<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;



    protected $table = 'events';

    protected $primaryKey = 'idE';

     protected $fillable= [


        'Eventname' ,
    
        'details',
       'dateDebut' ,
        
       'dateFin' ,
        'src',
        'Organisatorname' ,
        
       'heureD' ,
        
         'heureF' ,
        
         'type' ,
        
         'linkEvent' ,
        
         'payement',
        
        
        
        
];
}
