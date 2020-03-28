<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function newMail($address, $msg, $name)
{
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/SMTP.php";
    require "secrets.php"; //contains gmail username and password

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = $gmail_uname;
    $mail->Password = $gmail_password;
    $mail->SMTPSecure = "tsl";
    $mail->Port = "587";

    $htmlContent = ' 
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School registration confirmation</title>
    <style>
        .content {
            background-color: white;
            border: 1px solid darkgray;
        }
        .main {
            width: 500px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="main">
    <h3 style="text-align: center;color: black;font-weight: bold;">School Results System</h3>
        <div class="content">
            <h4 style="text-align: center;font-weight: normal;">
                Your registration was successfull. There\'s one more step to start using the system.
            </h4>
            <p style="text-align: center;font-weight: normal;color:darkgray;">
            Copy this link in your browser <b><a href="'.$msg.'" target="_blank">'.$msg.'</a></b>
            to verify your email address</p>
            <p>
                <b>Note:</b>
                This invitation was intended for <i>'.$address.'</i>
                If you were not expecting this invitation, you can ignore this email.
            </p>
        </div>
    </div>
</body>
</html>';
// $htmlContent2 = file_get_contents("school-reg.html");
    $mail->setFrom('no-reply@sms.com', 'School Management System');
    $mail->addAddress($address, $name);
    $mail->isHTML(true);   
    $mail->Subject = 'Verify your account';
    $mail->Body = $htmlContent;
    if (!$mail->send()) {
        //        echo 'Message was not sent.';
        header("location: ../register/index.php?msg=Email was not sent.&&code=200");
    } else {
        header("location: ../register/index.php?msg=Account created check your email.&&code=501");
    }
}
