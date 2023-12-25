<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view ('events.index')->with('events',  $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Event::create($input);
        return redirect('evenement')->with('flash_message', 'Evenement Addedd!'); ;
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $evenement =Event::find($id);
        return view('events.show')->with('events', $evenement);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    { 
        $evenement = Event::find($id);
        return view('events.edit')->with('events',  $evenement);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evenement = Event::find($id);
        $input = $request->all();
        $evenement->update($input);
        return redirect('evenement')->with('flash_message', 'Evenement Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
        Event::destroy($id);
        return redirect('evenement')->with('flash_message', 'Evenement  deleted!');  
    }
}
