<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function create(Request $request)
    {
        $contacts = Contact::create([
            'name' => $request->name,
            'tel' => $request->tel
        ]);

        return response()->json($contacts);
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id)->update([
            'name' => $request->name,
            'tel' => $request->tel
        ]);

        return response()->json($contact);
    }

    public function delete(Request $request, $id)
    {
        $contact = Contact::find($id)->delete();
        return response()->json($contact);
    }
}
