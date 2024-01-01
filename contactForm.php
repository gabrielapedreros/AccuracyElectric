<?php
$name = $_POST['name'];
$client_phone = $_POST['phone'];
$client_email = $_POST['email'];
$location = $_POST['location'];
$project= $_POST['project'];

$email_from ='contact@accuracyelectricllc.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Phone: $client_phone.\n".
                "User Email: $client_email.\n".
                "Location: $location.\n".
                "Project: $project.\n";

$to = 'accuracyelectricllc@gmail.com';
/* real email not provided for privacy purposes in code */

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $client_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
