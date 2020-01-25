<?php

if ($_POST['edit_f']){
  if ($_POST['fio'] != $_SESSION['fio']){
    mysqli_query($CONNECT, "UPDATE `users` SET `fio` = '$_POST[fio]' WHERE `id` = '$_SESSION[id]'");
message('Имя изменено');
  }
  if ($_POST['password'] and md5($_POST['password']) != $_SESSION['password']){
    password_valid();
    mysqli_query($CONNECT, "UPDATE `users` SET `password` = '$_POST[password]' WHERE `id` = '$_SESSION[id]'");
message('Пароль изменен');
  }
  if($_POST['protected']!= $_SESSION['protected'] ){
    if($_POST['protected'] == 1)
    $_SESSION['protected'] = 1;
    else
    $_SESSION['protected'] = 0;
    mysqli_query($CONNECT, "UPDATE `users` SET `protected`= '$_SESSION[protected]' WHERE `id` = '$_SESSION[id]'");
message('Уровень защиты зменен');

  }

}



?>
