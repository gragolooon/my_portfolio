<?php

namespace App\Http\Controllers;

use App\Models\ContactMeDetails;
use Illuminate\Http\Request;

class ContactMeDetailsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contactMeDetail = new ContactMeDetails;
        $contactMeDetail->name = $request->name;
        $contactMeDetail->email = $request->email;
        $contactMeDetail->message = $request->input('form-message');
        $contactMeDetail->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMeDetails $contactMeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactMeDetails $contactMeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMeDetails $contactMeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMeDetails $contactMeDetails)
    {
        //
    }
}
