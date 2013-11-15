<?php

include("converter.class.php");
include ( "NexmoMessage.php" );//include official api for sending sms

function nexmo_conv( $string )
{
	$conv = new converter;
	$string = $conv->convert('UTF','BIG', $string);
	$string = $conv->convert('BIG','GB', $string);
	$string = iconv('GBK', 'UTF-8//IGNORE', $string);
	$string = urlencode($string);
	return $string;
}


//******************************************
$api_key="put your key here";
$api_secret="put your secret key here";
//******************************************


$nexmo_sms = new NexmoMessage($api_key ,$api_secret);
//use $nexmo_sms->sendText($to ,$from ,$text)    to send a sms


function NexmoSendVoice($to , $text){
	global $api_key,$api_secret;
	$url="https://rest.nexmo.com/tts/json?api_key=".$api_key."&api_secret=".$api_secret."&to=".$to."&text=".urlencode($text)."&lg=zh-cn";
	return json_decode(file_get_contents($url));

}
//use NexmoSendVoice($to ,$text)  to send an traditional chinese voice call , $text is utf-8