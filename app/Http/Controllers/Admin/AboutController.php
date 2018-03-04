<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //

    public function show(){
    	if(view()->exists('bootstrap.about')){
    		return view('bootstrap.about')->withTitle('Hello World!');
    	}

    	abort(404);
    }
}
