<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use App\Services\FileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $applications = $main_query->paginate($request->perPage);
        } else
            $applications = $main_query->paginate(10);


        return view("admin.application-index", ["applications" => $applications]);
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
            "name" => ["required", "string", "max:255"],
            "resume"=> ["required", ...FileUploader::RESUME_RULES],
            "email"=>["required", "email", "max:255"],
            "phone_no" => ["required", "string", "max:20"],
            "message"=>["required", "string"],
            "position" => ["required", "string", "max:255"]

        ]);
        $data['resume'] = FileUploader::storeResume($request->file('resume'));
        Application::create($data);
        return redirect('/application-create')->with('status', 'Your application has been submitted successfully!');
    }

    public function download(string $filename)
    {
        $path = FileUploader::resumePath($filename);
        abort_if($path === null, 404);

        return Storage::disk('local')->download($path);
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
        $path = FileUploader::resumePath($application->resume);
        if ($path !== null) {
            Storage::disk('local')->delete($path);
        }
        $application->delete();

        return redirect()->route('application-index');
    }
}
