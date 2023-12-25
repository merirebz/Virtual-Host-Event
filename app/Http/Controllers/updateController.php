<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class updateController extends Controller
{
    public function getDatafromDB(){

         $e=DB::select ('select * from events');
        
         return view('readData',['evenement'=>$e]);
        
   }
        
        
        
        
         public function updateDatainDB($Eventname){
        
       $e=DB::select ('select * from events where Eventname=?',[$Eventname] );
        
     return view('formcreator',['evenements'=>$e]);
        
        }
        
        
        
        
        public function saveData(Request $request){
        
         $request->validate([
        
        'Eventname'=>'required',
        
        'dateDebut'=>'required',
        
        'dateFin'=>'required',
        
      'heureD'=>'required',
        
      'heureF'=>'required',
        
       'details'=>'required',
        
     'linkEvent'=>'required',
        
        'payement'=>'required'
        
        
        
        
        ]);
        
     $Eventname=$request->Eventname;
        
       $dateDebut=$request->dateDebut;
        
         $dateFin=$request->dateFin;
        
       $heureD=$request->heureD;
        
        $heureF=$request->heureF;
        
     $details=$request->details;
        
        $linkEvent=$request->linkEvent;
        
         $payement=$request->payement;
        
        
        
        
        
         
         $m=DB::update('update events set Eventname=?, dateDebut=?,dateFin=?,heureD=?,heureF=?,details=?,linkEvent=?,payement=?  where Eventname=?', [$Eventname, $dateDebut, $dateFin,$heureD,$heureF,$details,$linkEvent,$payement,$Eventname]);
        
    return redirect ('/');
        
        }}

    

