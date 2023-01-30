<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function index()
    {
        return Person::all();
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        return Person::create($request->all());
    }

    public function show($id)
    {
        return Person::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $Person = Person::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required'
        ]);
        
        $Person->update($request->all());

        return $Person;
    }

    public function destroy($id)
    {
        return Person::destroy($id);
    }
    

    public function search($name)
    {
        return Person::where('name', 'like', '%'.$name.'%')->get();
    }

    
  
}
