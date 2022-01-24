<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

//remember to use

class ChatsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->name;
        $msg = Message::where('sender',$user_id)->where('status',false)->get();
        $message = $msg->unique('ticketNo');
        return view("auth.account_support_ticket",\compact('message'));
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
    return Message::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        
    $user = Auth::user();
    $name = Auth::user()->name;
    $tck = \substr($request->input('ticketNo'),1);
    $this->validate($request,[
        'message'=> 'required',
        'subject'=> 'required',
        'ticketNo'=> 'required',
    ]);

    $message = $user->messages()->create([
        'message' => strip_tags($request->input('message')),
        'ticketNo' => $tck,
        'sender' => $name,
        'subject' => $request->input('subject')
    ]);


    toastr()->success('Message Sent','The following support ticket has been updated -'.$request->input('ticketNo'));
    return back();

    }

    public function showMessageChat($ticketNo)
    {
        $name = auth()->user()->name;
        $message = Message::where('sender',$name)->where('ticketNo',$ticketNo)->distinct()->get();
        $lst = DB::table('messages')->where('sender',$name)->get();
        $list = $lst->unique('ticketNo');

        //Mark Message as read
        Message::where('sender',$name)->where('ticketNo',$ticketNo)->where('sender','admin')->update([
            'status' => true
        ]);
        $ticket = Message::where('ticketNo',$ticketNo)->get();
        $subject = Message::where('ticketNo',$ticketNo)->value('subject');
        return view("auth.account_message_chat",\compact('list','ticket','message','ticketNo','subject'));
    }

    
}
