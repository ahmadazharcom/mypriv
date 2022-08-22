<?php
 
define('BOT_TOKEN', '5135963993:AAEmXDPyYtiEu_pp_RYrIIlo31tVpgcbf6U');
define('CHAT_ID','1998066003');
 
function kirimTelegram($pesan) {
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
 
kirimTelegram("Oniaga.ga");

echo kirimTelegram("Oniaga.ga");