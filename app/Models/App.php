<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public function package()
    {
        return $this->hasOne(Package::class);
    }
    public static function getImage($name)
    {
        $image = App::where('name',$name)->value('image');
        return "storage/images/product/".$image;
    }

    public static function getAppId($name)
    {
        return App::where('name','like','%'.$name.'%')->value('id');
    }

    public static function getAppSalesValue($app_name)
    {
        return Invoice::where('package_name',$app_name)->sum('package_price');
    }

    public static function salesPercentage($app_name)
    {
        $sum = Invoice::where('package_name',$app_name)->sum('package_price');
        $apps = App::all();
        $no_apps = count($apps);
        if($sum == 0)
        {
            return 0;
        }else
        {
            $math = ($no_apps/$sum)*100;
        return round($math);
        }
        
    }

    public static function countSales($app_name)
    {
        $sales = Invoice::where('package_name',$app_name)->get();
        return count($sales);
    }
    //
}

