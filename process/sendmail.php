<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

if (empty($_POST['textFieldName'] && $_POST['textFieldEmail'] && $_POST['textFieldMessageContent'])) {
    $arr = array('response' => "empty_fields");
    header('Content-Type: application/json');
    echo json_encode($arr);
    exit();
}

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com;';
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@kingdeorayom.tech';
    $mail->Password = 'Serkingd28();';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('admin@kingdeorayom.tech', 'Serking de Orayom');
    $mail->isHTML(true);
    $subject = 'New Client | Serking de Orayom';

    $recipient = 'kingdeorayom@gmail.com';
    $mail->addAddress($recipient);
    $mail->Subject = $subject;

    $name = $_POST['textFieldName'];
    $emailAddress = $_POST['textFieldEmail'];
    $message = $_POST['textFieldMessageContent'];

    $mail->Body = '<body>
                    <p>A new message from ' . $name . ' with an email of ' . $emailAddress . '.</p>
                    <p>The message is:</p>
                    <p>' . $message . '</p>
                </body>';

    $mail->send();

    $arr = array('response' => "success");
    header('Content-Type: application/json');
    echo json_encode($arr);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
