<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;
use App\Models\Whatsapp;

class WhatsappController extends Controller{

    public function index(Request $request){

    	//return $request;
		
        $request->validate([

            'name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:14'],
            'message' => ['required', 'min:10'],

        ]);
		
		$name = $request->name;
		$email = $request->email;
		$contact = $request->contact;
		$message = $request->message;

        $insertwhatsapp = new Whatsapp;
        $insertwhatsapp->name = $request->name;
        $insertwhatsapp->email = $request->email;
        $insertwhatsapp->contact = $request->contact;
        $insertwhatsapp->message = $request->message;
        $insertwhatsapp->ipaddr = request()->ip();
        $insertwhatsapp->save();

    	$recipient = "+60167318216";

        $sid    = getenv("TWILIO_AUTH_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);
        
        $body = "Nama: ".$name." Email: ".$email." Nombor Telefon Bimbit: ".$contact." Mesej: ".$message;

        $response = $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);

        return $response;
        //return redirect('/thankyou', ['response' => $response])->with('success', 'Pesanan telah dihantar!');

    }
	
	public function wa($subdomain, $contact = null, $text = null){
		
		if(null === $contact){
			$contact = '60167318216';
		}
		
		if(null === $text){
			$text = 'Saya ingin tahu tentang produk terbaru';
		}		

		header("Location: http://api.whatsapp.com/send/?phone=".$contact."&text=".rawurlencode($text));

		exit;
		
	
	}
	
    public function whatsapp_out(Request $request){

        $contact = $request->contact;
        $text = $request->message;

        if(null === $contact){
            $contact = '60167318216';
        }
        
        if(null === $text){
            $text = 'Saya ingin tahu tentang produk terbaru';
        }       

        header("Location: http://api.whatsapp.com/send/?phone=".$contact."&text=".rawurlencode($text));

        exit;        

    }

    public function encrypt(Request $request){

        $contact = $request->contact;
        $text = $request->message;

        if(null === $contact){
            $contact = '60167318216';
        }
        
        if(null === $text){
            $text = 'Saya ingin tahu tentang produk terbaru';
        }

        $encrypt_method = "AES-256-CBC";
        $secret_key = $request->secret_key;
        $secret_iv = 'abc1234';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        $string = $request->message;
        // encrypt token;
        $encryptToken = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $encryptToken = base64_encode($encryptToken);
        // decrypt token
        $decryptToken = openssl_decrypt(base64_decode($encryptToken), $encrypt_method, $key, 0, $iv);
        // output
        //dd($decryptToken);               
		
		$link = "https://mypriv.online/decoder/$encryptToken";

        header("Location: http://api.whatsapp.com/send/?phone=".$contact."&text=".rawurlencode($link));

        exit; 

    }

    public function decrypt(Request $request){

        $contact = $request->contact;
        $text = $request->message;

        if(null === $contact){
            $contact = '60167318216';
        }
        
        if(null === $text){
            $text = 'Saya ingin tahu tentang produk terbaru';
        }

        $encrypt_method = "AES-256-CBC";
        $secret_key = $request->secret_key;
        $secret_iv = 'abc1234';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        $string = $request->message;
        // encrypt token;
        $encryptToken = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $encryptToken = base64_encode($encryptToken);
        // decrypt token
        $decryptToken = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        // output
        //dd($decryptToken);               

        header("Location: http://api.whatsapp.com/send/?phone=".$contact."&text=".rawurlencode($decryptToken));

        exit; 

    }

	public function decoder($link){
		
		return view('/decoder', [
			
			'link' => $link
		
		]);
		
	}

}
