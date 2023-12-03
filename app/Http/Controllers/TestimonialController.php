<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $main_query = Testimonial::query();

        if ($request->perPage > 0) {
            $testimonials = $main_query->paginate($request->perPage);
        } else
            $testimonials = $main_query->paginate(10);


        return view("admin.testimonial.testimonial-index", ["testimonials" => $testimonials]);
    }
    public function create()
    {
        return view("admin.testimonial.testimonial-create");
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
                "rating" => ["required"],

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        }

        Testimonial::create($data);
        return redirect('/testimonial-index');
    }


    public function edit(Testimonial $testimonial)
    {
        return view("admin.testimonial.testimonial-edit", [
            "testimonial" => $testimonial
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "designation" => ["required", "string"],
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],
                "content" => ["required", "string"],
                "rating" => ["required"],

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
                "rating" => ["required"],

            ]);
        }

        $testimonial->update($data);
        return redirect('/testimonial-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        return redirect('/testimonial-index');
    }
}
