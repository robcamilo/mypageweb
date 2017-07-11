<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('layouts.app');
    }

    public function contact()
    {
        $messages = Message::all();

        return view('contacto', [
            'messages' => $messages
        ]);
    }

}
