<?php
	include("function.php");

	$to="+886987654321";
	$text="hello 你好";

	$return=NexmoSendVoice($to ,$text);
	print_r($return);

?>