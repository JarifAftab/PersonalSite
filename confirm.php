<?php

	$subject = $_POST['subject'];
	$msg = $_POST['msg'];
	
	$email = mail("someEmail@address.ca", $subject, $msg);

	if($email){
		echo "<h3>Email sent succesfully! You can now close this window!</h3>";
	}
	else{
		echo "<h3>Something went wrong... Close this window and try again!</h3>";
	}

	

?>