<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorepersonRequest;
use App\Http\Requests\UpdatepersonRequest;
use Faker\Provider\ar_EG\Person as Ar_EGPerson;

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
        // dd($request->all());
        $new_person = Person::create([
            'name' =>$request->name,
            'father_name' =>$request->father_name,
            'mother_name' =>$request->mother_name,
            'Age' =>$request->Age,
            'Gender' =>$request->Gender,
            'address' =>$request->address,
            'City' =>$request->City,
            'state' =>$request->state,
            'email' =>$request->email,
        ]);
        return redirect('person/');
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
        $person->update([
            'name' => $request->name,
            'role_discription' => $request->role_discription,
        ]);
        return redirect('person/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(person $person)
    {
        // echo $person;
        // die;
        $person->delete();
        return redirect('person/');
    }
}
