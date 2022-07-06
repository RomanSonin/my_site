<!DOCTYPE PHP>
<?php
  $connection = mysqli_connect('127.0.0.1','root','root','test_db');
  if($connection == false){
    echo "Не удалось подключиться к базе данных!<br>";
    echo mysqli_connect_error();
    exit();}
  mysqli_set_charset($connection, "utf8");
  $result = mysqli_query($connection,"SELECT * FROM `services`");
?>
  <ul>
    <?php
      while(($cat = mysqli_fetch_assoc($result))){
       echo '<li>'. $cat['service_name'] . " " . "(". $cat['cost'] . " руб.)" . '</li>';}
    ?>
  </ul>