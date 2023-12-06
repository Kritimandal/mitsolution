<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Post ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $main_query = Projects::query();

        if ($request->perPage > 0) {
            $projects = $main_query->paginate($request->perPage);
        } else
            $projects = $main_query->paginate(10);


        return view("admin.project.project-index", ["projects" => $projects]);
    }

    public function create()
    {
        $posts= Post::get();
        return view("admin.project.project-create", [ "posts" => $posts]);
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
                "demo_url" => ["required", "string"],
                "image" => ["required","image","dimensions:min_width=700,min_height=700,max_width=1100,max_height=980"],
                "priority" => ["required"],
                "post_id" => ["required"],
                "status" => ["required"],
                "alt_text" => ["nullable", "string"],

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } 

        Projects::create($data);
        return redirect('/project-index');
    }

    public function edit(Projects $project)
    {
        $posts= Post::get();
        return view("admin.project.project-edit", [
            "project" => $project,
            "posts" => $posts
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "demo_url" => ["required", "string"],
                "image" => ["required"],
                "priority" => ["required"],
                "post_id" => ["required"],
                "status" => ["required"],
                "alt_text" => ["nullable", "string"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "demo_url" => ["required", "string"],
                "priority" => ["required"],
                "post_id" => ["required"],
                "status" => ["required"],
                "alt_text" => ["nullable", "string"],

            ]);
        }

        $projects->update($data);
        return redirect('/project-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects)
    {
        //
        $projects->delete();
        return redirect('/project-index');
    }
}
