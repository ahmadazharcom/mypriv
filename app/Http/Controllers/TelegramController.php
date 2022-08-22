<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Models\Telegram;

class TelegramController extends Controller{

    public function index(Request $request){

    	//return $request;

    	$name = $request->name;
    	$email = $request->email;
    	$contact = $request->contact;
    	$username = $request->telegram;
    	$message = $request->message;

    	$html = "no";

    	$link = "no";

    	$text = "Nama: ". $name . " Email: ". $email . " No HP: ". $contact . " Telegram: " .$username. " Mesej: ".$message; 	

		header("Location: https://api.callmebot.com/text.php?user=".$username."&text=".$text."&html=".$html."&links=".$link);

		exit;


    }
	
	public function curlTest(){
		
        $apiURL = 'https://jsonplaceholder.typicode.com/posts';

        // POST Data
        $postInput = [
            'title' => 'Sample Post',
            'body' => "This is my sample curl post request with data",
            'userId' => 22
        ];
  
        // Headers
        $headers = [
            //...
        ];
  
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
      
        echo $statusCode;  // status code

       // dd($responseBody); // body response	

		return $responseBody;
		
	}
	
	public function curlTelegram(Request $request){

        $request->validate([

            'name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact' => ['required', 'string', 'max:14'],                      
            'message' => ['required', 'min:10'],

        ]);        

        $userbot = $request->userbot;

        if($userbot === null || $userbot === ""){

            $userbot = "N/A";
            
        }
		
    	$name = $request->name;
    	$email = $request->email;
    	$contact = $request->contact;
    	$username = $request->userbot;
    	$message = $request->message;	

        $inserttelegram = new Telegram;
        $inserttelegram->name = $request->name;
        $inserttelegram->email = $request->email;
        $inserttelegram->contact = $request->contact;
        $inserttelegram->userbot = $userbot;
        $inserttelegram->message = $request->message;
        $inserttelegram->ipaddr = request()->ip();
        $inserttelegram->save();        	
		
		$text = "Nama: ". $name . " Email: ". $email . " No HP: ". $contact . " Telegram: " .$username. " Mesej: ".$message;
		
		define('BOT_TOKEN', '1124728226:AAFLfNiHJmDpg-FywfOW-3D2zu2gT70ojIE');
		define('CHAT_ID','1025569215');
		
        $apiURL = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$text";

        // POST Data
        $postInput = [
            'bot' => '1124728226:AAFLfNiHJmDpg-FywfOW-3D2zu2gT70ojIE',
            'chat_id' => '1025569215',
            'text' => 'Hello Test Telegram'
        ];
  
        // Headers
        $headers = [
            //...
        ];
  
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
      
        echo $statusCode;  // status code

       // dd($responseBody); // body response	

		return $responseBody;
		
	}
	
	public function webhook(){
		
		echo "webhook";
		
        /*$token = "5135963993:AAEmXDPyYtiEu_pp_RYrIIlo31tVpgcbf6U";
        $apiURL = "https://api.telegram.org/bot$token";
        $update = json_decode(file_get_contents("php://input"), TRUE);
        $chatID = $update["message"]["chat"]["id"];
        $message = $update["message"]["text"];
        
        if (strpos($message, "/start") === 0) {
        
        file_get_contents($apiURL."/sendmessage?chat_id=".$chatID."&text=Haloo, test webhooks mypriv.online.&parse_mode=HTML");*/
		
	}

}
