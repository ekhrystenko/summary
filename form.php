<?php
session_start();
if ( isset($_POST['send-form']) ){

    $title = strip_tags(trim($_POST['title']));
    $message = strip_tags(trim($_POST['message']));

    $errors = [];

    if ( $title == '' ){
        $errors[] = 'Напишіть заголовок!';
    } elseif ( $message == '' ){
        $errors[] = 'Напишіть Ваше повідомлення!';
    } elseif ( mb_strlen($message) < 6){
        $errors[] = 'Напишіть повідомлення не менше 6 символів!';
    } elseif ( mb_strlen($message) > 150){
        $errors[] = 'Ваше повідомлення перевищує 150 символів!';
    }

    if ( empty($errors) ){

        $site = 'Резюме';
        $token = 'bot1563575064:AAFHXmuufEQhvFYMCDXZYVgV07Nt0DuW0AU';
        $chat_id = '-541357186';

        $txt = "У Вас нове повідомлення: " . "\n"
            . "Сайт: " . $site . "\n"
            . "Заголовок: " . $title . "\n"
            . "Повідомлення: " . $message;

        $complete = fopen('https://api.telegram.org/'.$token.'/sendMessage?chat_id='.$chat_id.'&parse_mode=html&text='.rawurlencode($txt), 'r');

        if ($complete) {
            $_SESSION['complete'] = 'Повідомлення відправлено успішно!';
        }
    } else {
        $show_errors = array_shift($errors);
    }
}
?>