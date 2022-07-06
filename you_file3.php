<!DOCTYPE PHP>
<?php
  $connection = mysqli_connect('127.0.0.1','root','root','test_db');
  if($connection == false){
    echo "Не удалось подключиться к базе данных!<br>";
    echo mysqli_connect_error();
    exit();}
  mysqli_set_charset($connection, "utf8");
  $result = mysqli_query($connection,"SELECT * FROM `comments`");
?>
  <ul>
    <?php
      while(($cat = mysqli_fetch_assoc($result))){
       echo '<li>'. $cat['author'] . ":" . '</li>' . $cat['comments_text'];}
    ?>
  </ul>
  <p><a href="pfc.php"><button class="new" name="myActionName" type="submit" value="">Оставить отзыв</button></a></p> 