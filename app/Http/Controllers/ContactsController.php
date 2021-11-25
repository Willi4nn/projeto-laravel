<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return redirect('contact');
    }

    function show()
    {
        $data = Contact::all();
        return view('admin.dashboard', ['contacts' => $data]);
    }
}
