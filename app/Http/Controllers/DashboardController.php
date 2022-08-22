<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whatsapp;
use App\Models\Telegram;
use App\Models\User;
use App\Models\Profile;
use App\Models\Product;
use App\Models\Order;
use Carbon\Carbon;


class DashboardController extends Controller{

	public function index(){

		$whatsapps = Whatsapp::latest()->get();

		$telegrams = Telegram::latest()->get();

        $orders = Order::latest()->get();

		$wa_todays = Whatsapp::whereDate('created_at', Carbon::today())->get();

		$te_todays = Telegram::whereDate('created_at', Carbon::today())->get();

        $orders_todays = Order::whereDate('created_at', Carbon::today())->get();

        $profiles = Profile::where('id', 1)->first();

		return view('dashboard.index', [

			'whatsapps' => $whatsapps,

			'telegrams' => $telegrams,

            'orders' => $orders,

			'wa_todays' => $wa_todays,

			'te_todays' => $te_todays,

            'orders_todays' => $orders_todays,

            'profiles' => $profiles		

		]);

	}

    public function whatsapp(){

        $whatsapp = Whatsapp::latest()->get();
        $profiles = Profile::where('id', 1)->first();

    	return view('/dashboard/whatsapp', [

    		'whatsapps' => $whatsapp,
            'profiles' => $profiles

    	]);

    }

    public function telegram(){

        $telegrams = Telegram::latest()->get();
        $profiles = Profile::where('id', 1)->first();

    	return view('/dashboard/telegram', [

    		'telegrams' => $telegrams,
            'profiles' => $profiles

    	]);

    }
	
    public function whatsapp_single($id){
		
		$whatsapp = Whatsapp::where('id', $id)->first();
        $profiles = Profile::where('id', 1)->first();

    	return view('/dashboard/whatsapp_single', [

    		'whatsapp' => $whatsapp,
            'profiles' => $profiles

    	]);

    }

    public function telegram_single($id){
		
		$telegram = Telegram::where('id', $id)->first();
        $profiles = Profile::where('id', 1)->first();

    	return view('/dashboard/telegram_single', [

    		'telegram' => $telegram,
            'profiles' => $profiles

    	]);

    }

    public function product(){

        $profiles = Profile::where('id', 1)->first();
        $products = Product::latest()->get();
        
        return view('dashboard/product', [

            'profiles' => $profiles,
            'products' => $products

        ]);

    }    	

    public function setting(){

        $profiles = Profile::where('id', 1)->first();
        $users = User::where('id', auth()->user()->id)->first();
		
		return view('dashboard/setting', [

            'profiles' => $profiles,
            'users' => $users

        ]);

    }

}
