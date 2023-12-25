<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
{
    return view('formulaire');
}

public function submitForm(Request $request)
{
    // traiter les données soumises
    return redirect('/formulaire');
}
}
