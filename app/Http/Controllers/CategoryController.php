<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.all-categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>['required', 'max:100'],
            'description' =>['required', 'max:250'],

        ]);

        $category = Category::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('message', 'Category Created succesfully');
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
