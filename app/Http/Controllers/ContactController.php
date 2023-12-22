<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        dd('ok!');
    }
}
