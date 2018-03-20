<?php
$email=$_POST['email'];
$to=$email;

$message="From: Admin@it-its.com <br />Poster Teknologi Informasi ITS: https://drive.google.com/open?id=1Odk7nBk5wSEjglY9F9SlZ-zehs99nYOF";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: admin@it-its.com'."\r\n";
$headers .= 'Cc: admin@it-its.com'."\r\n";
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>