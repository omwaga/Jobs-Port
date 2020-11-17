<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Town;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Country::paginate(25);

        return view('admin.locations', compact('locations'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'country_code' => 'required',
            'description' => 'nullable',
        ]);

        Country::create($attributes);

        return back()->with('message', 'Country added successfully');
    }

    public function addstate(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'countries_id' => 'required',
            'description' => 'nullable',
        ]);

        Town::create($attributes);

        return back()->with('message', 'Town added successfully');
    }

    public function editstate($id)
    {
       $town = Town::findOrFail($id);
       $locations = Country::all();

       return view('admin.edit-state', compact('town', 'locations'));
   }

   public function updatestate(Request $request, $id)
   {
       $town = Town::findOrFail($id);
       $town->update(request(['name', 'countries_id', 'description']));

       return redirect(route('countries.show', $request->countries_id))->with('message', 'The town has been updated successfully');
   }

   public function destroystate($id)
   {
       $town = Town::findOrFail($id);
       $town->delete();

       return back()->with('message', 'The town has been deleted successfully');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('admin.show-country', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.edit-country', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $country->update(request(['name', 'country_code', 'description']));
        return back()->with('message', 'Country has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {        
        $country->delete();
        
        return back()->with('message', 'Country has been deleted successfully');
    }
}
