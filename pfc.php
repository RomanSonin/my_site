<!DOCTYPE html>
<html>
  <head>
    <title>test.ru</title>
    <link rel="icon" href="\favicon.ico"> 
    <meta charset="utf-8">
    <style>
      body {
        font-family: garamond;
        background: #fff; /* Фоновый цвет и фоновый рисунок*/
        color: #8B0000; /*Цвет текста на странице*/}
      button.new {
        background: #fff; /* Цвет фона кнопок */
        padding: 5px 45px; /* Размер кнопок */
        color: #8B0000; /* Цвет текста кнопки */
        font-family: garamond; /* Шрифт текста кнопки */
        font-size: 20px; /* Размер текста кнопки */
        border-radius: 5px; /* Сглаживание углов кнопки */
        border: 2px solid #000; /* Размер обводки кнопки и её цвет */ } 
      table {
        background: #8B0000;
      }
    </style>
  </head>
  <body>
    <a href="index.php"><img src="logo.png" align="left" width="550" height="100"></a>
    <p align="right">Сеть Барбершопов "I BITE!"<br>testmailfortest22@gmail.com<br>+7(932)239-32-60</p><br><br><br>
    <form method="POST"><table width="100%" align="center"><tr><td align="center">
    <button class="new" name="myActionName" type="submit" value="0">Наши мастера</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value="1">Прейскурант</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value="2">Отзыва о нас</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value="3">Записаться на стрижку</button></td></tr></table></form>

    <?php
      if (isset($_POST['myActionName'])) {
        switch ($_POST['myActionName']) {
        case '0':
         include_once 'you_file1.php';
         break;
        case '1':
         include_once 'you_file2.php';
         break;
        case '2':
         include_once 'you_file3.php';
         break;
        case '3':
         include_once 'you_file4.php';
         break;}}
    ?>  <br><br><br>

<center><form method="POST" action="">
 <input name="author" type="text" placeholder="Введите имя"/>
 <input name="comments_text" type="text" placeholder="Введите комментарий"/>
 <input name="articles_id" type="text" placeholder="Введите номер мастера"/>
 <input type="submit" value="Отправить"/>
</form></center>
  
<?php
 $author = $_POST['author'];
 $comments_text = $_POST['comments_text'];
 $articles_id = $_POST ['articles_id'];
 $db_host = "localhost"; 
 $db_user = "root";
 $db_password = "root";
 $db_base = 'test_db';
 $db_table = "comments";

 try {
  $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
  $db->exec("set names utf8");}

 catch (PDOException $e) {
  print "Ошибка!: " . $e->getMessage() . "<br/>";}

 $data = array( 'author' => $author, 'comments_text' => $comments_text, 'articles_id' => $articles_id); 
 $query = $db->prepare("INSERT INTO $db_table (author, comments_text, articles_id) values (:author, :comments_text, :articles_id)");
 $query->execute($data);
  if ($query == 'true'){
   header ("location: index.php");
  }
?>
  </body> 
</html>