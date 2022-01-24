<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        "tx_ref","name","phone","email","ip","payment_type",
        "status","charged_amount","app_fee","amount_settled"
    ];
}
