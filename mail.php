<?php
$to = "thomaspanget@gmail.com";
$subject = "Car Rental";

$message = "
<html>
<head>
<title>Email verification</title>
</head>
<body>
<p>This email is sent to you to verify your registration in our website (CarRental.com).
  If you didnt sign up, please ignore this email. Otherwise, Please click this button.
</p>
<button><a href='https://cserwebhost.000webhostapp.com/verify.php'></a></button>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <CarRental@gmail.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
