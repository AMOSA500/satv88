<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        "ticketNo","subject","message","sender"
    ];
    public function user()
    {
    return $this->belongsTo("\App\Models\User");
    }

    public static function genTicketId(){
        return "#".rand(100000,100000000);
    }

    public static function getResColor($sr)
    {
        if ($sr == 'admin') {
           return 'aliceblue';
        }return 'honeydew';
    }

    public static function countNewMessage($id)
    {
        $tck = Message::where('user_id',$id)->get();
        $stack = 0;
        foreach ($tck as $key) {
            $count =  Message::where('ticketNo',$key->ticketNo)->where('sender','Super Administrator')->where('status',false)->count();    
            $stack += $count;
        }
        
        return $stack;
    }
    public static function notificationMessage($id)
    {
        $tck = Message::where('user_id',$id)->get();
        $stack = [];
        foreach ($tck as $key) {
            $count =  Message::where('ticketNo',$key->ticketNo)->where('sender','Super Administrator')->where('status',false)->get();    
            array_push($stack,$count);
        }
        
        return ($stack);
    }
    public static function countMessage()
    {
        $count =  Message::where('sender','Super Administrator')->where('status',false)->count();
        return $count;
    }
}
