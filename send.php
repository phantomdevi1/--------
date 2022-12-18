<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
mail("gruzdev_ilya16@mail.ru", "Запрос на рассылку", "Имя:".$fio.". E-mail: ".$email ,"From: gruzdevily.temp.swtest@mail.ru \r\n");

if(mail("gruzdev_ilya16@mail.ru", "Запрос на рассылку", "Имя:".$fio.". E-mail: ".$email ,"From: gruzdevily.temp.swtest@mail.ru \r\n"))\
  {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
  }?>
