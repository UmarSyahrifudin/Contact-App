<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact(['contacts']));
    }

    public function create() {
        return view('contacts.create');
    }
    
    public function store(Request $request) {
        Contact::create($request->all());
        return redirect('/contacts');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact(['contact']));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());
        return redirect('/contacts');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts');
    }
}
