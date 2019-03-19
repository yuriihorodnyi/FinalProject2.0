<?php

/* https://api.telegram.org/bot755661398:AAECNAPJMDB5r9YDmGOIUxrnRi_H8l-gJX0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$text = $_POST['user_text'];
$token = "755661398:AAECNAPJMDB5r9YDmGOIUxrnRi_H8l-gJX0";
$chat_id = "-318750026";
$arr = array(
  'Ім*я: ' => $name,
  'Прізвище' => $surname,
  'Email' => $email,
  'Телефон: ' => $phone,
  'Опис' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>