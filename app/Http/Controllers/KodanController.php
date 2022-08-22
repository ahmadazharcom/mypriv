<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KodanController extends Controller{

    public function index(){

		echo request()->ip();

		if(isset($_GET['text'])){
			
			$text = $_GET['text'];
		
			$content = str_replace(' ', '+', $text);
			
			return view('kodan', ['content' => $content]);

		}else{

			return view('kodan', ['content' => '']);
		}    	

    }
}
