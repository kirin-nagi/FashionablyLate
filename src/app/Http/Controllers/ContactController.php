<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}

