Simple Nexmo SMS/TTS(VoiceCall) Sender
==

Nexmo is a SMS/Voice sender service with only API access.

<https://www.nexmo.com>



About this simple sender
--

1. For PHP
2. Support Traditional Chinese for Voice Call.
3. Simple to use



#####This simple sender has the following files:

1. function.php
2. sendmessage.php
3. sendvoice.php

#####[Nexmo official API](https://docs.nexmo.com/index.php/pre-built-libraries) (for sending SMS)

2. NexmoAccount.php
3. NexmoMessage.php
4. NexmoReceipt.php

#####[nexmo-tts-zh](https://github.com/jeremy5189/nexmo-tts-zh) for Nexmo Text To Speech Traditional Chinese (UTF-8) support

5. converter.class.php
6. nexmo-tts-zh/*
7. tables/*


Usage
--

###1 : Set up API key/secret
######Open function.php and set your key/secret:


	$api_key="put your key here";
	$api_secret="put your secret key here";


###2 : Include function.php

	include("function.php");


###3 : Send

#####SMS

	$to="+88612345678";
	$from="+886987654321";
	$text="hello 你好";
	$nexmo_sms->sendText($to ,$from ,$text);


#####TTS(VoiceCall)


	$to="+886987654321";
	$text="utf-8 here , hello 你好";
	NexmoSendVoice($to ,$text);

###4 : Returning value (OPTIONAL)

#####SMS returns something like:
	stdClass Object
	(
	   	[messagecount] => 1
	    [messages] => Array
	        (
	            [0] => stdClass Object
	                (
	                    [to] => 886987654321
	                    [messageprice] => 0.01100000
	                    [status] => 0
	                    [messageid] => 05000000025ABCDE
	                    [remainingbalance] => 3.1415926
	                    [network] => 46692
	                )

	        )
	
    	[cost] => 0.011
	)

You may refer [Nexmo Document](https://docs.nexmo.com/index.php/messaging-sms-api/send-message) for details.

#####TTS returns something like:

	stdClass Object
	(
	    [to] => 886987654321
	    [status] => 0
	    [call-id] => 548ffdeb0c01d22c2fdf03cbabcdefgh
	)
	

You may refer [Nexmo Document](https://docs.nexmo.com/index.php/voice-api/text-to-speech) for details.
