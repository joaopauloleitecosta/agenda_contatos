<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //list of contacts
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create page 
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //add a contact in the database
        Contact::create($request->validate(
                [
                    'name'  => 'required',
                    'email' => 'required|email|unique:contacts',
                    'phone' => 'required'
                ]
        ));
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //edit page
        return view('contacts.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //update page
        $contact->update($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,'.$contact->id,
            'phone' => 'required'
        ]));
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //delete page
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
