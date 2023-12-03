<?php

namespace App\Http\Controllers;

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
            "site_logo" => ["required"],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
            "site_phone_number" => ["required"],
            "site_email"=> ["string", "required"],
            "facebook_link" =>["string", "nullable"],
            "instagram_link" =>["string", "nullable"],
            "twitter_link" =>["string", "nullable"],
            "linkedin_link" =>["string", "nullable"],
        ]);

        $image = $request->file('site_logo');
        $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/photos');
        $image->move($destinationPath, $input['image_name']);
        $data['site_logo'] = $input['image_name'];

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
            "site_logo" => ["required"],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
            "site_phone_number" => ["required"],
            "site_email"=> ["string", "required"],
            "facebook_link" =>["string", "nullable"],
            "instagram_link" =>["string", "nullable"],
            "twitter_link" =>["string", "nullable"],
            "linkedin_link" =>["string", "nullable"],

            ]);
            $image = $request->file('site_logo');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['site_logo'] = $input['image_name'];
        }else{
            $data = $request->validate([
                "site_name" => ["required", "string"],
            "logo_alt_text" => ["nullable", "string"],
            "site_location" => ["required", "string"],
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
