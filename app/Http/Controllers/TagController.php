<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
        //
        $main_query = Tag::query();

        if ($request->perPage > 0) {
            $tags = $main_query->paginate($request->perPage);
        } else
            $tags = $main_query->paginate(10);


        return view("admin.tag.tag-index", ["tags" => $tags]);
    }
    public function create()
    {
        
        return view("admin.tag.tag-create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            "name" => ["required", "string"]

        ]);
        Tag::create($data);
        return redirect('/tag-index')->with('message', 'Data successfully added.');
    }

    public function edit(Tag $tag)
    {
        return view("admin.tag.tag-edit", [
            "tag" => $tag
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //

        $data = $request->validate([
            "name" => ["required", "string"]

        ]);
        $tag->update($data);
        return redirect('/tag-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
        $tag->delete();
        return redirect('/tag-index');
    }
}
