<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $main_query = Post::query();

        if ($request->perPage > 0) {
            $posts = $main_query->paginate($request->perPage);
        } else
            $posts = $main_query->paginate(10);


        return view("admin.post.post-index", ["posts" => $posts]);
    }
    public function create()
    {
       $subcategory = SubCategory::get();
        return view("admin.post.post-create",[
            "subcategory" => $subcategory
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "status" => ["required"],
            "priority" => ["required"],
            "image" => ["required"],
            "alt_text" => ["nullable", "string"],
            "sub_category_id" =>["required"]

        ]);
        $image = $request->file('image');
        $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/photos');
        $image->move($destinationPath, $input['image_name']);
        $data['image'] = $input['image_name'];

        Post::create($data);
        return redirect('/post-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = SubCategory::get();
        return view("admin.post.post-edit", [
            "categories" => $categories,
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "image" => ["required"],
                "status" => ["required"],
                "priority" => ["required"],
                "alt_text" => ["nullable", "string"],
                "sub_category_id" =>["required"]

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "status" => ["required"],
                "priority" => ["required"],
                "alt_text" => ["nullable", "string"],
                "sub_category_id" =>["required"]

            ]);
        }
        $post->update($data);
        return redirect('/post-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect('/post-index');
    }
}
