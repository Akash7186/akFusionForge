<?php

$host='Localhost';
$user='root';
$pass='';
$db='fusionforge';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
   echo 'connected successfully to mydb database';

$sql="insert into mytable1 (name,email,class,comment,message) values('jhon','abh7186@gmail.com','btech2','hjhjhjhjhjhjhjhjbd','hjfcdjc')";
$query=mysqli_query($con,$sql);
if($query)
   echo 'data inserted successfully';





$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'abh7186@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                    "User Message: $message .\n";

$to = 'abh7186@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>