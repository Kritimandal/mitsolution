<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //


     $main_query = Client::query();

        if ($request->perPage > 0) {
            $clients = $main_query->paginate($request->perPage);
        } else
            $clients = $main_query->paginate(10);


        return view("admin.client.client-index", ["clients" => $clients]);
    }
    public function create()
    {
        return view("admin.client.client-create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "name" => ["required", "string"],
            "image" => ["required"],
            "alt_text" => ["nullable", "string"],

        ]);
        $image = $request->file('image');
        $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

        $destinationPath = public_path('/images/photos');
        $image->move($destinationPath, $input['image_name']);
        $data['image'] = $input['image_name'];

        Client::create($data);
        return redirect('/client-index');
    }

    public function edit(Client $client)
    {
        return view("admin.client.client-edit", [
            "client" => $client
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //

        if ($request->image) {
            $data = $request->validate([
                "name" => ["required", "string"],
                "image" => ["required"],
                "alt_text" => ["nullable", "string"],

            ]);
            $image = $request->file('image');
            $input['image_name'] = "Image-" . date('Ymdhis') . random_int(0, 1234) . "." . $image->getClientOriginalName();

            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $input['image_name']);
            $data['image'] = $input['image_name'];
        } else {
            $data = $request->validate([
                "name" => ["required", "string"],
                "alt_text" => ["nullable", "string"],

            ]);
        }

        $client->update($data);
        return redirect('/testimonial-index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return redirect('/client-index');
    }
}
