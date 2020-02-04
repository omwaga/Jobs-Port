<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BlogCategory;

class BlogCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = BlogCategory::all();

        return view('admin.blog-categories', compact('categories'));
    }
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:25']
        ]);

        BlogCategory::create($attributes);

        return redirect()->back()->withSuccess('The category has been created successfully!');
    }
    
    public function destroy(BlogCategory $blogcategory)
    {
        $blogcategory->delete();

    }

}
