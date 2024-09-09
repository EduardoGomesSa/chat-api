<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request){
        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|in|exists:users,id',
        ]);

        $message = $request->message;
        $user = auth()->user;

        broadcast(new MessageSent($message, $user))->toOthers();

        return response()->json(['status'=>'Message Sent!']);
    }
}
