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

    public function coll(){
        $oxygen = collect(['O', 'O', 'O']); // Wrap the array in collect()

        $hydrogen = collect(['H', 'H', 'H']); // Wrap the array in collect()
        
        // Take one molecule of hydrogen and merge them with
        // two molecules of oxygen to create H₂O, or water.
        $water = $hydrogen->take(2)->merge(
            $oxygen->take(1)
        );
        // $collection = collect(['saleem ', 'odai', 'shahd',null])->map(function (?string $name) {
        //     return strtoupper($name);
        // })->reject(function (string $name) {
        //     return empty($name);
        // });

        

        // return view('page2',['collection'=> $water]);
        return view('page2');
    }
}