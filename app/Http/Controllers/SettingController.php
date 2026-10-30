<?php

namespace App\Http\Controllers;

use App\Services\FileUploader;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        
        $setting = Setting::first();

        return view("admin.setting.setting-index", ["setting" => $setting]);
    }
    public function create()
    {
        return view("admin.setting.setting-create");
    }
    public function edit(Setting $setting)
    {
        return view("admin.setting.setting-edit", ["setting" => $setting]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "site_name" => ["required", "string"],
            "site_logo" => ["required", ...FileUploader::IMAGE_RULES],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
            "meta_title" => ["required", "string"],
            "meta_description" => ["required", "string"],
            "meta_keywords" => ["required", "string"],
            "site_phone_number" => ["required"],
            "site_email"=> ["string", "required"],
            "facebook_link" =>["string", "nullable"],
            "instagram_link" =>["string", "nullable"],
            "twitter_link" =>["string", "nullable"],
            "linkedin_link" =>["string", "nullable"],
        ]);

        $data['site_logo'] = FileUploader::storePublicImage($request->file('site_logo'));

        Setting::create($data);
        return redirect('/setting-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
        if($request->site_logo){
            $data = $request->validate([
                "site_name" => ["required", "string"],
            "site_logo" => ["required", ...FileUploader::IMAGE_RULES, "dimensions:min_width=582,min_height=30,max_width=682,max_height=110"],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
            "meta_title" => ["required", "string"],
            "meta_description" => ["required", "string"],
            "meta_keywords" => ["required", "string"],
            "site_phone_number" => ["required"],
            "site_email"=> ["string", "required"],
            "facebook_link" =>["string", "nullable"],
            "instagram_link" =>["string", "nullable"],
            "twitter_link" =>["string", "nullable"],
            "linkedin_link" =>["string", "nullable"],

            ]);
            $data['site_logo'] = FileUploader::storePublicImage($request->file('site_logo'));
        }else{
            $data = $request->validate([
                "site_name" => ["required", "string"],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
            "meta_title" => ["required", "string"],
            "meta_description" => ["required", "string"],
            "meta_keywords" => ["required", "string"],
            "site_phone_number" => ["required"],
            "site_email"=> ["string", "required"],
            "facebook_link" =>["string", "nullable"],
            "instagram_link" =>["string", "nullable"],
            "twitter_link" =>["string", "nullable"],
            "linkedin_link" =>["string", "nullable"],

            ]);
        }
        $setting->update($data);
        return redirect('/setting-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
        $setting->delete();
        return redirect('/setting-index');
    }
}
