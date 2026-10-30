<?php

namespace App\Http\Controllers;

use App\Services\FileUploader;
use App\Models\Banner;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
        //
        $main_query = Banner::query();

        if ($request->perPage > 0) {
            $banners = $main_query->paginate($request->perPage);
        } else
            $banners = $main_query->paginate(10);


        return view("admin.banner.banner-index", ["banners" => $banners]);
    }
    public function create()
    {
        $categories = Category::all();
        return view("admin.banner.banner-create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "image" => ["required", ...FileUploader::IMAGE_RULES],
                "alt_text" => ["nullable", "string"],
                "category_id" =>["required"]

            ]);
            $data['image'] = FileUploader::storePublicImage($request->file('image'));
        } 

        Banner::create($data);
        return redirect('/banner-index');
    }

    public function edit(Banner $banner)
    {
        $categories = Category::get();
        return view("admin.banner.banner-edit", [
            "categories" => $categories,
            "banner" => $banner
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "image" => ["required", ...FileUploader::IMAGE_RULES],
                "alt_text" => ["nullable", "string"],
                "category_id" =>["required"]

            ]);
            $data['image'] = FileUploader::storePublicImage($request->file('image'));
        } else {
            $data = $request->validate([
                "title" => ["required", "string"],
                "description" => ["required", "string"],
                "alt_text" => ["nullable", "string"],
                "category_id" =>["required"]

            ]);
        }

        $banner->update($data);
        return redirect('/banner-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        return redirect('/banner-index');
    }
}
