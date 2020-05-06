<?php
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$queryType = $_POST['optradio'];
	$query = $_POST['subject'];
   
    $emailFrom = 'oneilllauren96@gmail.com';
    $emailSub = "Query";
	$emailBody = "User Name: $fname.\n".
				"User Last Name: $lname.\n".
				 "User e-mail: $email.\n".
				 "User mobile: $phone.\n".
				 "Query Type: $queryType.\n".
				 "Query: $query.\n".
				 
				 
    $to = "oneilllauren96@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .="Reply to: $email \r\n";

    mail($to, $emailSub, $emailBody, $headers);
    header("Location: thankyou.html");
    
?>
