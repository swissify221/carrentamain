<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalController extends Controller
{
    public function setLocale($lang){

        if(in_array($lang,['en','de'])){
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
    }

    public function change(Request $request){
        App::setLocale( $request->lang);
        Session::put('locale', $request->lang);
        return redirect()->back();
    }
}
