<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class addUser extends Controller
{
    //
    public function index(){
        $us = User::get();
        return view('admin-home' , compact('us'));
    }

    public function addUs(){
        return view('addUser');
    }

    public function save(Request $request){
        
        $data = [
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'is_admin'=>'required|integer',
            'password'=>'required',
        ];

        $validateData = $request->validate($data);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'is_admin'=>$request->is_admin,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->back()->with('success' , 'User Add Successfully');
    }
}
