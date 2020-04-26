<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    
    public function submit(ContactRequest $req) {
    	$contact = new Contact();
    	$contact->name = $req->input('name');
    	$contact->email = $req->input('name');
    	$contact->subject = $req->input('name');
    	$contact->message = $req->input('name');

    }
}
