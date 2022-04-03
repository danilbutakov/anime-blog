<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language');
    $mail->IsHtml(true);

    $mail->setFrom('mr.ambrozia@mail.ru', 'Dan');
    $mail->addAddress('ibutakov52@gmail.com');
    $mail->Subject = 'Привет! Это "Я"';

    $body = '<h1>Это письмо!</h1>';

    if(trim(!empty($_POST['email']))) {
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }

    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>