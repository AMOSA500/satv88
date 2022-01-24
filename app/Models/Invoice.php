<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'user_id','invoice_no','package_name','package_description','package_price','package_status'
    ];
    protected $hidden = ['created_at','updated_at'];

    public static function countInvoice()
    {
        $list = Invoice::where('user_id',Auth()->user()->id)->where('package_status',false)->get();
        return $list->count();
    }
    
    public static function countActiveInvoice()
    {
        $list = Invoice::where('user_id',Auth()->user()->id)->where('package_status',true)->get();
        return $list->count();
    }

    public static function subTotal($id)
    {
       return Invoice::where('user_id',$id)->where('package_status',false)->sum('package_price');
    }

    public static function getUnpaidInvoiceNo($id)
    {
        return Invoice::where('user_id',$id)->where('package_status',false)->get();
    }
}
