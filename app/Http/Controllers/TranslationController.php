<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function translate()
    {
        Session::put('locale', 'ar');
        App::setLocale('ar');
        return redirect()->back()->with('success', 'Translation triggered successfully!');
    }
}