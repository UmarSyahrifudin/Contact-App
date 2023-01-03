<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactApiController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json(['message'=>'Success', 'data'=>$contacts]);
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return response()->json(['message'=>'Success', 'data'=>$contact]);
    }

    public function store(Request $request) {
        $contact = Contact::create($request->all());
        return response()->json(['message'=>'Data has been inserted successfully', 'data'=>$contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());
        return response()->json(['message'=>'Data has been updated successfully', 'data'=>$contact]);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return response()->json(['message'=>'Data has been deleted successfully', 'data'=>null ]);
    }
}
