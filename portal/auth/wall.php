<?php top ('Стена')?>
<body>
<div class="wrapper">
<?php menu() ?>
<div class="content">
<div class="block">
<style>
.content {
justify-content: flex-start;
flex-direction: column;
}
.block {
  width: 90%;
  position: static;
  margin-bottom: 0px;
}
.lents {
width: 80%;
}
p{
  text-align: center;
}
  </style>
<h1>"Это стена. Оставь тут память о себе."</h1>
<p><textarea id="message" placeholder="Введите Ваше сообщение" class="lents"></textarea></p>
<p><button onclick="post_query('add','wall','message')">Написать</button></p>
</div>
<div class="block">
<h1>"Записи"</h1>
<?php
  $query = mysqli_query($CONNECT, 'SELECT `text`, `uid` FROM `wall` ORDER BY `id` DESC');

  if( !mysqli_num_rows($query))exit('Список отзывов пуст');

  while( $row = mysqli_fetch_assoc($query)){
    $user = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `fio` FROM `users` WHERE `id`=$row[uid]"));

        echo '<div class="walls"><span>Отправитель <i>'.$user['fio'].'</i> : </span>'.bbcode(nl2br(htmlspecialchars($row['text']),false)).'</div>';
  }
?>
</div>
</div>
</div>
</body>
</html>
