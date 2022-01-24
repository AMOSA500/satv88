<?php

namespace App\Models;

use App\Models\User_privacies;
use Illuminate\Database\Eloquent\Model;

class User_privacies extends Model
{
    //
    protected $table = 'user_privacies';

    public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    public static function getPhoto($id)
    {
        return User_privacies::where('user_id',$id)->value('photo');
    }
}
