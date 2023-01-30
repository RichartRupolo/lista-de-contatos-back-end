<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonContactRequest;
use App\Http\Requests\UpdatePersonContactRequest;
use App\Models\PersonContact;

class PersonContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function show(PersonContact $personContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonContact $personContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonContactRequest  $request
     * @param  \App\Models\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonContactRequest $request, PersonContact $personContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonContact  $personContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonContact $personContact)
    {
        //
    }
}
