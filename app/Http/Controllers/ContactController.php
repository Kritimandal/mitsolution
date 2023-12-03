<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $main_query = Contact::query();

        if ($request->perPage > 0) {
            $contacts = $main_query->paginate($request->perPage);
        } else
            $contacts = $main_query->paginate(10);
            
        return view("admin.contact.contact-index", ["contacts" => $contacts]);
    }
    public function create()
    {
        return view("admin.contact.contact-create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "phone_number" => ["required", "integer","size:10"],
            "message" => ["required", "string"],
        ]);
       

        Contact::create($data);
        return redirect('/contact-index');
    }

    public function edit(Contact $contact)
    {
       
        return view("admin.contact.contact-edit", [
            "contact" => $contact
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "phone_number" => ["required", "integer","size:10"],
            "message" => ["required", "string"],
        ]);
        $contact->update($data);
        return redirect('/contact-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect('/contact-index');
    }
}
