<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
        //
        $main_query = Category::query();

        if ($request->perPage > 0) {
            $categories = $main_query->paginate($request->perPage);
        } else
            $categories = $main_query->paginate(10);


        return view("admin.category.category-index", ["categories" => $categories]);
    }
    public function create()
    {
        $categories = Category::all();
        return view("admin.category.category-create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            "name" => ["required", "string"],
            "meta_title" => ["required", "string"],
            "meta_description" => ["required", "string"],
            "meta_keywords" => ["required", "string"],

        ]);
        Category::create($data);
        return redirect('/category-index')->with('message', 'Data successfully added.');
    }

    public function edit(Category $category)
    {
        return view("admin.category.category-edit", [
            "Category" => $category
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //

        
            $data = $request->validate([
                "name" => ["required", "string"],
                "meta_title" => ["required", "string"],
                "meta_description" => ["required", "string"],
                "meta_keywords" => ["required", "string"],
            ]);
            $category->update($data);
            return redirect('/category-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('/category-index');
    }
}
