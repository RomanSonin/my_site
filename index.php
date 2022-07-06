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
        background: #540000;}
    </style>
  </head>
  <body>
    <div style='padding:2rem 10rem;'><a href="index.php"><img src="logo.png" align="left" width="400" height="100"></a>
    <p align="right">Сеть Барбершопов "I BITE!"<br>testmailfortest22@gmail.com<br>+7(932)239-32-60</p><br><br>
    <form method="POST"><table width="100%" align="center"><tr><td align="center">
    <button class="new" name="myActionName" type="submit" value="0">Наши мастера</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value="1">Прейскурант</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value="2">Отзывы о нас</button></td><td align="center">
    <button class="new" name="myActionName" type="submit" value=""><a href=#top>Записаться на стрижку</a></button></td></tr></table></form>
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
    ?><hr></div>
    <center><img src="p1.png" width="80%" height="100%"></center>
    <div style='padding:2rem 10rem; font-size:1rem; line-height:2rem;'><h1>Стрижка, Укладка, Парикмахерская, Парикмахер, ножницы, мастер, лучший, лучший, брэнд!</h1>
    <h4>Как получить лучшую стрижку от парикмахера?</h4><div>В чем основная разница между парикмахерскими 
    ножницами и парикмахерскими ножницами? Второе, и более важное, это то, что вам нужно использовать правильную пару инструментов. Это означает использование
    настоящих машинок для стрижки волос, таких как профессиональные парикмахеры, вместо того, чтобы пытаться поднять триммер для бороды наверх. Как правило,
    машинки для стрижки волос более мощные, чем триммеры для бороды, и лучше подходят для стрижки всех типов волос (хотя некоторые триммеры специально 
    предназначены для обоих типов). Инвестирование в лучшие машинки для стрижки волос, если вы собираетесь заниматься домашним уходом, имеет важное значение,
    если вы хотите, чтобы стрижка выглядела хорошо, а не домотканой.</div><div>16 лучших машинок для стрижки волос для мужчин по мнению парикмахеров Ищете
    профессиональные парикмахерские ножницы? Взгляните на эти рекомендации 1. Решите, какой стиль вы хотите. Стрижка «жужжание» — это общий стиль, который
    имеет множество вариаций, поэтому, прежде чем запускать машинку для стрижки, подумайте о конечном результате, на который вы надеетесь.</div>
    <h4>5 лучших парикмахерских брендов мира.</h4><div>Вы можете спросить своих коллег или других
    парикмахеров об их любимых брендах, но всегда ориентируйтесь на качество парикмахерских ножниц. В лучших парикмахерских ножницах используется
    высококачественная сталь, так как они служат дольше, имеют более острые лезвия и дольше режут. На рынке представлены тысячи брендов, поэтому
    купить парикмахерскую машинку для стрижки легко, а иногда даже дешево.</div><div>Самые популярные марки ножниц и ножниц, которые используют
    парикмахеры, надежны, доступны по цене и дольше сохраняют остроту лезвия. Прежде чем я перейду к следующему разделу этого поста, вот
    несколько полезных советов по выбору парикмахера, которые могут пригодиться… 13 лучших парикмахерских ножниц и ножниц для стрижки волос в
    домашних условиях, по мнению стилистов.</div></div><br><br>

    <div style='padding:2rem 10rem;'><h3>Запишитесь к нам прямо сейчас!</h3>
    <form action="you_file4.php" method="post">

    <p>Ваше имя: <input type="text" name="name" required></p>

    <p>E-mail: <input type="text" name="mail" required></p>

    <p>Выберите дату: <input type="date" name="date" required></p>

    <p>Выберите мастера: <select name="mast" required>
                            <option>Ольга Кривенко</option>
                            <option>Татьяна Иванова</option>
                            <option>Ольга Кекликова</option>
                            <option>Наталья Осипова</option>
                            <option>Тётя Тома</option>
                            <option>Дядя Ваня</option>
                            </select></p>

    <p>Выберите услугу: <select name="uslu" required>
                            <option>Стрижка "Минутка" (250 руб.)</option>
                            <option>Укладка бровей (100 руб.)</option>
                            <option>Стрижка "Луковое горе" (150 руб.)</option>
                            <option>Прогулка с собакой (400 руб.)</option>
                            <option>Стрижка "Котелок" (150 руб.)</option>
                            <option>Сбрить всё нахрен (300 руб.)</option>
                            <option>Стрижка "soutch park" (150 руб.)</option>
                            <option>Стрижка "Телепат" (250 руб.)</option>
                            </select></p>

    <p><input type="submit" value="Отправить"></p>
    </form><a id='top'></div>
    
    
    
    
    
    







    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
  </body> 
</html>