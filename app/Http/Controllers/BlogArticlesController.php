<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\BlogCategory;

class BlogArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = BlogCategory::all();
        
        return view('admin.blog-articles', compact('articles', 'categories'));
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
            'title' => ['required', 'min:3'],
            'category_id' => 'required',
            'description' => ['required', 'min:30']
            ]);
        Article::create($attributes);
        
        return redirect('/blogarticles')->withSuccess('Article Succesfully created!');
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
    public function edit(Article $blogarticle)
    {

        $categories = BlogCategory::all();

        return view('admin.edit-article', compact('blogarticle', 'categories'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Article $blogarticle)
    {
        $blogarticle->update(request(['title', 'category_id', 'description']));

        return redirect('/blogarticles')->with('message', 'The article has been updated Succesfully');
        dd('hello');
        // $blogarticle->update(request('title', 'category_id', 'description'));
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
