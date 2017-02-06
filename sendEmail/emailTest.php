<?php
echo 'Sending Message...<br>';
include('Mail/Mail.php');

$from = 'necrophagia.12@gmail.com';//your email address
//$to = '1530450@upt.edu.mx';
//$from = '1530450@upt.edu.mx';
$to = 'luisr.morales@upt.edu.mx';
$subject = 'Curso Xamarin';
$body = "Jorge Perales Diaz
Diego Silva Prieto
Antonio Perez Gonzales";
$host='ssl://smtp.gmail.com';
$port='465';
$auth= true;
$password='000pipo.182';
$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);
$smtp = Mail::factory('smtp', array(
        'host' => $host,
        'port' => $port,
        'auth' =>$auth,
        'username' => $from,
        'password' =>$password
    ));
// Send the mail
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() ."</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
echo "See in your email if exists"; 
?>