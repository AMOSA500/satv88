<?php

namespace App\Models;


use App\Models\User_privacies;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_privacies(){
        return $this->hasOne('App\Models\User_privacies');
    }

    public function messages()
    {
    return $this->hasMany("\App\Models\Message");
    }

    

    public static function getImage($id)
    {
        return User_privacies::where('user_id',$id)->value('photo');
    }

}
