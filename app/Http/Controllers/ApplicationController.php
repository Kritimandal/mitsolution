<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        //
        $main_query = Application::query();

        if ($request->perPage > 0) {
            $categories = $main_query->paginate($request->perPage);
        } else
            $categories = $main_query->paginate(10);


        return view("admin.application-index", ["categories" => $categories]);
    }
    public function create()
    {
        $banner= Banner::where('category_id', 13)->first();
        return view("frontend.application-form", ["banner"=> $banner]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            "name" => ["required", "string"],
            "resume"=> ["required"],
            "email"=>["required", "string"],
            "phone_no" => ["required","integer","size:10"],
            "message"=>["required", "string"],

            "position" => ["required", "string"]

        ]);
        Application::create($data);
        return redirect('/application-create')->with('status', 'Your application has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
        $application->delete();
        redirect('application-index');
    }
}
