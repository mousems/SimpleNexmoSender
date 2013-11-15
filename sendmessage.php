<?php
	include("function.php");

	$to="+88612345678";
	$from="+886987654321";
	$text="hello 你好";

	$return=$nexmo_sms->sendText($to ,$from ,$text)
	print_r($return);

?>
