<?php
	$type = $_POST['optradio'];
	$people = $_POST['number'];
	$userEmail = $_POST['email'];
	$priceLimit = $_POST['price'];

   
    $emailFrom = 'oneilllauren96@gmail.com';
    $emailSub = "Tour Query";
	$emailBody = "Tour Type: $type.\n".
				"Group Size: $people.\n".
				 "User e-mail: $userEmail.\n".
				 "User price point: $priceLimit.\n".
	
    $to = "oneilllauren96@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .="Reply to: $userEmail \r\n";

    mail($to, $emailSub, $emailBody, $headers);
    header("Location: thankyou.html");
    
?>