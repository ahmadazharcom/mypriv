<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;
use App\Models\Order;
use App\Models\Profile;

class OrderController extends Controller{

    public function index(){

        $profiles = Profile::where('id', 1)->first();
        $orders = Order::latest()->get();

        return view('/dashboard/order', [

            'profiles' => $profiles,
            'orders' => $orders

        ]);

    }

	public function sendwa(Request $request){

		//return $request;

        $request->validate([

            'name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:14'],

        ]);	    

        $insertorder = new Order;
        $insertorder->product_id = $request->product_id;
        $insertorder->product_name = $request->product_name;
        $insertorder->price = $request->price;
        $insertorder->quantity = $request->quantity;
        $insertorder->total = $request->total;

        $insertorder->customer_name = $request->name;
        $insertorder->email = $request->email;
        $insertorder->contact = $request->contact;
        $insertorder->notes = $request->notes;
        $insertorder->save();	

        $order_id = $insertorder->id;	 

        $link = "http://{{ env('APP_DOMAIN') }}/";

    	$recipient = "+60167318216";

        $sid    = getenv("TWILIO_AUTH_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);
        
        $body = "Nama: ".$request->name." Email: ".$request->email." Nombor Telefon Bimbit: ".$request->contact." Order Id: ".$link;

        $response = $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);

        return $response;
        //return redirect('/thankyou', ['response' => $response])->with('success', 'Pesanan telah dihantar!');


	}
    

}
