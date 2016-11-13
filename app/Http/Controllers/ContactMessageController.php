<?php
/**
 * Created by PhpStorm.
 * User: Zoki
 * Date: 11/10/2016
 * Time: 1:23 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\ContactMessage;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Event;


class ContactMessageController extends Controller
{
    public function getContactIndex() {
        return view('frontend.other.contact');
    }

    public function postSendMessage(Request $request) {
        $this->validate($request, [
           'email' => 'required|email',
            'name' => 'required|max:100',
            'subject' => 'required|max:140',
            'message' => 'required|min:10'
        ]);
        $message = new ContactMessage();
        $message->email = $request['email'];
        $message->sender = $request['name'];
        $message->subject = $request['subject'];
        $message->body = $request['message'];
        $message->save();
        //Event::fire(new MessageSent($message));
        return redirect()->route('contact')->with(['success' => 'Message successfully sent!']);
    }
}