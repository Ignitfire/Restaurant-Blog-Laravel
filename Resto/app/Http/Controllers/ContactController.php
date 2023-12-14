<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFilterRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    function index(){
        $title = 'Nous contacter';
        return view('layouts/contact',['title'=>$title]);
    }

    public function store(ContactFilterRequest $request) {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();
        return redirect('/contact');
    }
}
