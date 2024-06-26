<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
        {
            return view('frontend.contact');
        }

        public function contactlist()
                {
                    $list = Contact::all();
                    return view('adminDash.contact.contact',compact('list'));
                }

         /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::all();
        return view('frontend.contact',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.create')->with('msg', 'Contact Successfully Created');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
