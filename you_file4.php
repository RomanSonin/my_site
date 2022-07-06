<!DOCTYPE PHP>
<?php
$name = $_POST['name'];
$name = trim($name);
$name = htmlspecialchars($name);

$mail = $_POST['mail'];
$mail = trim($mail);
$mail = htmlspecialchars($mail);

$date = $_POST['date'];
$date = trim($date);
$date = htmlspecialchars($date);

$mast = $_POST['mast'];
$mast = trim($mast);
$mast = htmlspecialchars($mast);

$uslu = $_POST['uslu'];
$uslu = trim($uslu);
$uslu = htmlspecialchars($uslu);




echo $name;
echo "<br>";
echo $mail;
echo "<br>";
echo $date;
echo "<br>";
echo $mast;
echo "<br>";
echo $uslu;
echo "<br>";

$to = $mail; 

$subject = "Проверка отправки писем"; 

$message = "Здравствуйте
Если вы читаете это письмо значит все ок
Почтовый робот"; 

$headers = "From: test.ru <testmailfortest22@gmail.com>\r\nContent-type: text/plain; charset=windows-1251 \r\n";

if (mail($to, $subject, $message, $headers)){
  echo "Сообщение отправленно!";
} else {
  echo "Ошибка!";
}
?>