<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];

    public static function getRole($id)
    {
        return DB::table('role_user')->where('user_id',$id)->value('role_id');
    }
}
