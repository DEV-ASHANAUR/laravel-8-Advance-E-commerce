<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{    
    /**
     * for bangla language
     *
     * @return void
     */
    public function bangla()
    {
        session()->get('language');
        session()->forget('language');
        Session::put('language','bangla');
        return redirect()->back();
    }    
    /**
     * for english language
     *
     * @return void
     */
    public function english()
    {
        session()->get('language');
        session()->forget('language');
        Session::put('language','english');
        return redirect()->back();
    }
}
