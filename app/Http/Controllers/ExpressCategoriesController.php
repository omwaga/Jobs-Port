<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpressCategory;
use Storage;
class ExpressCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ExpressCategory::paginate(25);

        return view('admin.express-categories', compact('categories'));
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
            'cover_image' => 'nullable',
        ]);


        $category = $request->all();
        if ($request->hasFile('cover_image')) {
            $category['cover_image'] = $request->cover_image->getClientOriginalName();
            $request->cover_image->storeAs('public/expresscategories', $category['cover_image']);
        }

        ExpressCategory::create($attributes);

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpressCategory $expresscategory)
    {
        return view('admin.edit-express-category', compact('expresscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpressCategory $expresscategory)
    {
        $category = $request->all();
        if ($request->hasFile('cover_image')) {
            $category['cover_image'] = $request->cover_image->getClientOriginalName();
            $request->cover_image->storeAs('public/expresscategories', $category['cover_image']);
        }

        $expresscategory->update(['name' => $request->name, 'cover_image' => $category['cover_image']]);

    return redirect(route('expresscategories.index'))->with('message', 'The category has been updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpressCategory $expresscategory)
    {
        $expresscategory->delete();

        return back()->with('message', 'The category has been deleted successfully');
    }
}
