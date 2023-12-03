<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $main_query = SubCategory::query();


        if ($request->perPage > 0) {
            $subcategorys = $main_query->paginate($request->perPage);
        } else {
            $subcategorys = $main_query->paginate(10);
        }
        // $subcategorys->id
        // $category = Category::find($subcategorys->category_id);

        return view("admin.subCategory.subCategory-index", [
            "subcategorys" => $subcategorys,
            // "category" => $category
        ]);
    }
    public function create()
    {
        $categories = Category::get();
        return view("admin.subCategory.subCategory-create", ["categories" => $categories]);
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::get();
        return view("admin.subCategory.subCategory-edit", [
            "categories" => $categories,
            "subCategory" => $subCategory
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "description" => ["required"],
                "image" => ["required", "image"],
                "alt_text" => ["required", "string"],
                "category_id" => ["required"]
            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        }

        SubCategory::create($data);
        return redirect('/subcategory-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "description" => ["required"],
                "image" => ["required", "image"],
                "alt_text" => ["required", "string"],
                "category_id" => ["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "description" => ["required"],
                "alt_text" => ["required", "string"],
                "category_id" => ["required"]

            ]);
        }

        $subCategory->update($data);
        return redirect('/subcategory-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        //
        $subCategory->delete();
        return redirect('/subcategory-index');
    }
}
