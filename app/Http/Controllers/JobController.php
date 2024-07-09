<?php

namespace App\Http\Controllers;

use App\Jobs\RedirectMe;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function dis(){
        dispatch(new RedirectMe('page'));
        return view('page');
    }
}
