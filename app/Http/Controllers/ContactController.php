<?php

namespace App\Http\Controllers;

use App\Models\contact;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        //dd('ddd');
        return view('website.contact.contact');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacts = contact::UpdateOrCreate([
        'name'=>request('name'),
        'email'=>request('email'),
        'phone_number'=>request('number'),      
        'message'=>request('comment'),
        ]);

         return redirect('/get_contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontactRequest $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
