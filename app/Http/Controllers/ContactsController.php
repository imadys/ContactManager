<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::get();
        return view('layouts.contents.contacts.index',[
            'contacts' => $contacts
        ]);
    }


    public function create()
    {
        return view('layouts.contents.contacts.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);

        $contact = new contact();

        $contact->name = request('name');
        $contact->number = request('number');
        $contact->email = request('email');
        $contact->gender = request('gender');

        $contact->save();

        return redirect()->route('contacts.index')->with('success', __('dashboard.Successfully added new contact'));


    }


    public function show($id)
    {
        $item = Contact::findOrFail($id);
        return view('layouts.contents.contacts.show',[
            'item' => $item
        ]);
    }



    public function update(Request $request, $id)
    {
        $item = Contact::findOrFail($id);
        request()->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);

        $item->name = request('name');
        $item->number = request('number');
        $item->email = request('email');
        $item->gender = request('gender');

        $item->save();

        return redirect()->route('contacts.index')->with('success', __('dashboard.Successfully updated contact'));

    }


    public function destroy($id)
    {
        $item = Contact::find($id);

        $item->delete();
        return redirect()->route('contacts.index')->with('success', __('admin.Successfully Deleted the contact'));

    }
}
