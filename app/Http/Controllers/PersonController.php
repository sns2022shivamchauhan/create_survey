<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Http\Requests\StorepersonRequest;
use App\Http\Requests\UpdatepersonRequest;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $person = Person::all(); 
        return view('person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepersonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(person $person)
    {
        return view('person.edit', compact('person'));
       
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepersonRequest $request, person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(person $person)
    {
        //
        $person->delete();
        return redirect('person/');
    }
}
