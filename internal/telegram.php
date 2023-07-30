<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

if (empty($name) || empty($phone)) {
    header('location: /error');
} else {
    $token = "6694467428:AAGKQfSiraUxt6z3d0rRXtmIA8Mz60Fgy5A";
    $chat_id = "-950254812";
    $arr = array(
        'Имя пользователя: ' => $name,
        'Телефон: ' => $phone
    );

    foreach ($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    if ($sendToTelegram) {
        setcookie('telegram', 'yes', time() + 5, '/');
        header('location: ../');
    }
}

?>