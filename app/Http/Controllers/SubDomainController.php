<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubDomainController extends Controller{

	public function index($subdomain){

		return view($subdomain);

	}


	public function test($subdomain,$page){

		//dd($subdomain);

		echo $subdomain;

		echo "<br />";

		echo $page;		

	} 

	public function page($subdomain,$page){

		echo $page;			

		echo "<br />";

		//return view($subdomain);

		echo $subdomain;	

	}    

}
