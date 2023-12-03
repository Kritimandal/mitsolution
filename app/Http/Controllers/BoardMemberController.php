<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $main_query = BoardMember::query();

        if ($request->perPage > 0) {
            $baordmembers = $main_query->paginate($request->perPage);
        } else
            $baordmembers = $main_query->paginate(10);


        return view("admin.boardMember.boardmember-index", ["boardmembers" => $baordmembers]);
    }
    public function create()
    {
        return view("admin.boardMember.boardmember-create");
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
                "designation" => ["required", "string"],
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],
                "content" => ["required", "string"],
                "board_member" => ["required"],

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        }

        BoardMember::create($data);
        return redirect('/boardmember-index');
    }

    public function edit(BoardMember $boardMember)
    {
        return view("admin.testimonial.testimonial-edit", [
            "boardmember" => $boardMember
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BoardMember $boardMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BoardMember $boardMember)
    {
        //
        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["required", "string"],
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],
                "content" => ["required", "string"],
                "board_member" => ["required"],

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["required", "string"],
                "alt_text" => ["nullable", "string"],
                "content" => ["required", "string"],
                "board_member" => ["required"],

            ]);
        }
        $boardMember->update($data);
        return redirect('/boardmember-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BoardMember $boardMember)
    {
        //
        $boardMember->delete();
        return redirect('/boardmember-index');
    }
}
