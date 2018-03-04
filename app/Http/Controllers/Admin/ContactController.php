<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function show(Request $request){

    	
    	print_r($request->all());

    	if(view()->exists('bootstrap.contact')){
    		return view('bootstrap.contact')->withTitle('Контакты');
    	}

    	abort(404);
    }

    public function show_2(Request $request){

    	
    	print_r($request->all());

    	if(view()->exists('simantecui.template')){
    		return view('simantecui.template')->withTitle('Контакты');
    	}

    	abort(404);
    }
}
