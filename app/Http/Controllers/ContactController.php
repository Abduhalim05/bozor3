<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data=$request->all();

        Contact::create($data);

        return redirect()->route('home');
    }
}
