<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $main_query = Technology::query();

        if ($request->perPage > 0) {
            $technologys = $main_query->paginate($request->perPage);
        } else
            $technologys = $main_query->paginate(10);


        return view("admin.technology.technology-index", ["technologys" => $technologys]);
    }
    public function create()
    {
        $tags = Tag::all();
        return view("admin.technology.technology-create", ["tags" => $tags]);
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
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],
                "tag_id" =>["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } 

        Technology::create($data);
        return redirect('/technology-index');
    }

    public function edit(Technology $technology)
    {
        $tags = Tag::get();
        return view("admin.technology.technology-edit", [
            "tags" => $tags,
            "technology" => $technology
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],
                "tag_id" =>["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "alt_text" => ["nullable", "string"],
                "tag_id" =>["required"]

            ]);
        }

        $technology->update($data);
        return redirect('/technology-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        //
        $technology->delete();
        return redirect('/technology-index');
    }
}
