<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class TranslateController extends Controller
{
    public function translateEn(){
        App::setLocale('en');
        Session::put('locale', 'en');    
        
        return redirect()->back();
        } 
        
        public function translateAr(){
            App::setLocale('ar');
            Session::put('locale', 'ar');    
            
            // app()->setlocale('ar');
            return redirect()->back();
            } 
        
}
