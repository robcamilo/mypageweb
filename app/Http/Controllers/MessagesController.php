<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function create(Request $request)
    {
        //$this->validate($request, [
        //'message' => 'required'
        //]);

        $message = Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message')

        ]);
        //dd($message);
        return view('messages.form');
    }
}
