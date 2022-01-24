<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function App()
    {
        return $this->belongsTo("App\Models\App");
    }

    

   
}
