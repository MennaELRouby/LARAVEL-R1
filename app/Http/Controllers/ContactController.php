<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contactus;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function create()
    {
        return view('contact');
    }

    function send(Request $request)
    {

        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string'
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new Contactus($data));
        return 'message sent, thanks';
    }
}
