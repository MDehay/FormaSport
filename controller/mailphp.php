<?php

require '../model/assets/PHPMailer-master/src/Exception.php';
require '../model/assets/PHPMailer-master/src/PHPMailer.php';
require '../model/assets/PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once('config_db.php');

 
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host =$g_smtp_host;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $g_smtp_username;                 // SMTP username
    $mail->Password = $g_smtp_password;                           // SMTP password
    $mail->SMTPSecure ="ssl";                            // Enable TLS encryption, `ssl` also accepted

    $mail->Port = $g_smtp_port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($g_smtp_username, 'l\'envoye');
    $mail->addAddress($_SESSION['to']);     // Add a recipient
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ceci est message test';
    $mail->Body    = 'vous avez ete convier pour la reunion du <b>26 janvier 2018 de 14h a 16h</b> dans la salle numero <b>5</b> ' ;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo; 
}

?>
