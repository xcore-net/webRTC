<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index(){
        // $employees = DB::table('emp')->get();
       

        if (Cache::has('employess')) {
            $employees = Cache::get('employess');
        } else {
            // Data not found in the cache, fetch it from the original source and cache it.
            $employees = DB::table('emp')->get();
            Cache::put('employess', $employees, 30);
        }
        return response()->json($employees);
    }
}
