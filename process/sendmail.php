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

if (!filter_var($_POST['textFieldEmail'], FILTER_VALIDATE_EMAIL)) {
    $arr = array('response' => "invalid_email");
    header('Content-Type: application/json');
    echo json_encode($arr);
    exit();
}

if (isset($_POST['button-send-message']) && $_POST['g-recaptcha-response'] != "") {

    $secretKey = '6LcHs9ogAAAAAIXHrQSvxRYWhDPOPzGW9wrs46vz';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    if ($responseData->success) {

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com;';
            $mail->SMTPAuth = true;
            $mail->Username = 'portfolio@kingdeorayom.tech';
            $mail->Password = 'Serkingd28();';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('portfolio@kingdeorayom.tech', 'Serking de Orayom');
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
    }
}
