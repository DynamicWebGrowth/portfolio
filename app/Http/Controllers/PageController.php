<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class PageController extends Controller
{
    public function privacy()
    {
        $setting = Setting::first();
        return view('privacy',compact('setting'));
    }

    public function terms()
    {
        return view('terms');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function help()
    {
        return view('help');
    }
}
