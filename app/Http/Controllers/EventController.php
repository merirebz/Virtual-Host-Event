<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;






class EventController extends Controller
{

    public function index()
    {
        $data = Event::get();
        return view('readData', compact('data'));
    }
    public function ajouter()
    {
        return view('insertform');

    }


    ///insertion d'un evenet



    public function save(Request $request)
    {

        $Eventname = $request->Eventname;
        $Organisatorname = $request->Organisatorname;
        $details = $request->details;
        $src = $request->src;
        $dateDebut = $request->dateDebut;
        $dateFin = $request->dateFin;
        $heureD = $request->heureD;
        $heureF = $request->heureF;
        $type = $request->type;
        $payement = $request->payement;
        $linkEvent = $request->linkEvent;


        if ($request->hasFile('src')) 
        { $image = $request->file('src');
             $nom_image = time().'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/images');
             $image->move($destinationPath, $nom_image); 
            }
             else { $nom_image = null; }
        $c = new Event();
        $c->Eventname = $Eventname;
        $c->Organisatorname = $Organisatorname;
                $c->details = $details;
                $c->src = $nom_image;
                $c->dateDebut = $dateDebut;
                $c->dateFin = $dateFin;
                $c->heureD = $heureD;
                $c->heureF = $heureF;
                $c->type = $type;
                $c->payement = $payement;
                $c->linkEvent = $linkEvent;

            $c->save();

        return redirect()->back()->with('success', 'Event Add Successfully');
    }
    

    public function createevent(){
        if (auth()->check()){
            return view('insertform');
        }
        else if(auth()->check()){
            return redirect()->route('register');
        }
        else  {
            return redirect()->route('login');
        }
    }

}