<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        ($request);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        $message = new Message();
        $message->user_id = $request->user_id;
        $message->content = $request->content;
        $message->save();

        return response()->json(['message' => 'Message sent successfully'], 201);
    }
}
