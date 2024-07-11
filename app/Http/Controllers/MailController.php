<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendmail(){
        $name = 'saleem';
        Mail::to('odaiten@gmail.com')->send(new SendMail($name));

        return view('welcome');

    }
}
