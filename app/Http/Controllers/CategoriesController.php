<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobcategories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = jobcategories::paginate(25);

        return view('admin.categories', compact('categories'));
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
        $attributes = request()->validate([
            'jobcategories' => 'required|unique:jobcategories',
            'description' => 'nullable',
            'seo_description' => 'nullable'
        ]);

        jobcategories::create($attributes);

        return back()->with('message', 'The category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(jobcategories $category)
    {
        return view('admin.edit-categories', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobcategories $category)
    {
        $attributes = request()->validate([
            'jobcategories' => 'required',
            'description' => 'nullable',
            'seo_description' => 'nullable'
        ]);

        $category->update(request(['jobcategories', 'description', 'seo_description']));

        return redirect(route('categories.index'))->with('message', 'The category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
