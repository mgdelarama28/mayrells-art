<?php

namespace App\Http\Controllers\Web;

use App\Models\Message;
use App\Mail\ContactFormMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    protected $recipient = 'mgdelarama.28@gmail.com';

    public function store(Request $request)
    {
        $vars = $request->except(['_token',]);
        $newMessage = Message::create($vars);

        $this->sendMessage($newMessage);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
    
    protected function sendMessage($message)
    {
        Mail::to($this->recipient)
            ->send(new ContactFormMessage($message));
    }
}
