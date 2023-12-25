<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CardPaginationController extends Controller
{ public function index()
    {
       // return view('cardevent', ['cart' => DB::table('evenement')->paginate(3)]); //paginate
   
       $m=DB::table('events')->simplePaginate(5);
       return view('card',["cart"=>$m]);
    } 
    public function afficher(){
        // $m=DB::table('events')->paginate();
        // return view('cartcreator',["cartt"=>$m]);
        $m=DB::table('events')->simplePaginate(6);
        
        return view('profilcreator',["profil"=>$m]);
    }
    
}
