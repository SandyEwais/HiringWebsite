<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MessagesController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => '',
            'message' => 'required'
        ]);
        Message::create($data);
        return redirect()->route('index')->with('message','Message Sent Successfully');
    }
    public function show(){
        return view('Pages.Admin.show_messages',[
        'messages' => Message::latest()->get()
        ]);
    }

    public function showModal(Request $request){
        return $request;
    }
}
