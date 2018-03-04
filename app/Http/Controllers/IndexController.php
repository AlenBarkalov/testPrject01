<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function show(){

    	$array = array(
    						
    						'title'=>'Laravel Project',
    						'data' =>[
    								'one' => 'List 1',
    								'two' => 'List 2',
    								'three' => 'List 3',
    								'four' => 'List 4',
    								'five' => 'List 5'
    								],
    						'dataI' =>['List 1','List 2','List 3','List 4','List 5'],	
    								
    						'bvar' => true,
    						'script' =>"<script>alert('hello')</script>"		
    						
    						); 

    	//проверяем существование шаблона
    	if(view()->exists('bootstrap.index')){
    		
    		//view()->name('bootstrap','myview');
    		//return view()->of('myview')->withTitle('Hello World!');

    		//$data = array('title' => 'Наименование. Баркалов Ален','title2'=>'Наимнование -2-');
    		//return view('bootstrap',$data);

    		// чтобы потом можно обработать всё что попало в вид
    		//$view = view('bootstrap.index',['title'=>'Hello World?'])->render();
    		//echo "$view";
    		//return;
    		//$path = config('view.paths');
    		//return view()->file($path[0].'/errors/400.blade.php')->withTitle('Hello World!');
    		
    		return view('bootstrap.index',$array);
    	}

    	abort(404);
    }
    
	// Можно так:
    
}
