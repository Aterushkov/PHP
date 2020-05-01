<?php
error_reporting(-1);
require_once 'funcs.php';
require_once 'connect.php';
if(!empty($_POST)){
    seve_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$messages = get_mess();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
    <div class="col-12 wrap" >
        <div class="big-window col-12 text-right ">
           <div class="col-12 p-4 d-flex justify-content-center karkas" id="karkas">
              <form action="index.php" method="post">
                  <p>
                    <label form="name">Имя:</label>
                    <input type="text" name="name" id="name">
                  </p>
                  <p>
                    <label form="text">Имя:</label>
                    <textarea type="text" name="text" id="text"></textarea>
                  </p>
                  <button type="submit">Написать</button>
              </form>

              <hr>
              <?php
              if(!empty($messages)):?>
                  <?php foreach ($messages as $value):?>
                    <div>
                      <p>Автор: <?=$value['name']?>| Дата:  <?=$value['date']?></p>
                      <div>
                      <?=$value['text']?>
                      </div>
                    </div>
                  <?php endforeach?>
              
              <?php endif?>
            </div>
        </div>
    </div>
</body>
</html>