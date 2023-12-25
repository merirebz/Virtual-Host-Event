<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class testController extends Controller
{
    ///return view details visiteur lors de click sur read 



    public function show($Eventname){

       $event = Event::where('Eventname', $Eventname)->first();
        return view('details', ['event' => $event]);
        
       }
        
        public function index(){
        
        return view('cartcreator');
        
     }
    
     public function affiche($Eventname){

      $event = Event::where('Eventname', $Eventname)->first();
       return view('readData', ['event' => $event]);
      
      }
      
public function reg(){
   return view("addUser");
}


     
      
}