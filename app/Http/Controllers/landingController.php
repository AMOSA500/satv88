<?php

namespace App\Http\Controllers;


class landingController extends Controller
{
    //

    public function showDevicesPage()
    {
        return view('devices');
    }

    public function showContactPage()
    {
        return view('contact');
    }
}
