<?php
function go_auth($data){
  foreach ($data as $key => $value)
    $_SESSION[$key] = $value;
    	go('profile');
}

//Страница логирования
if ($_POST['login_f']){
  email_valid();
  password_valid();
  captcha_valid();
  if ( !mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` ='$_POST[email]' AND `password` ='$_POST[password]'")))
  message( 'Аккаунт не найден' );

  $row = mysqli_fetch_assoc( mysqli_query($CONNECT, "SELECT * FROM `users` WHERE `email` ='$_POST[email]'"));

  if ($row['protected'] == 1){
    $code = random_str(5);

    $_SESSION ['confirm'] = array(
    'type' => 'login',
    'data' => $row,
    'code' => $code,
    );

    send_mail($_POST['email'],'Подтверждение', "Код подтверждения входа</br>$code");
    go('confirm');
  }

go_auth($row);
  }



//Страница регистрации
else if ($_POST['registr_f']){
  email_valid();
  password_valid();
  captcha_valid();
if (mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` ='$_POST[email]'")))
  message( 'Этот email занят' );

  $code = random_str(5);

$_SESSION ['confirm'] = array(
  'type' => 'registr',
  'email' => $_POST['email'],
  'password' => $_POST['password'],
  'code' => $code,
);

send_mail($_POST['email'],'Регистрация', "Код подтверждения регистрации</br>$code");
go('confirm');

}


//Страница восстановления
else if ($_POST['recovery_f']){
  email_valid();
  captcha_valid();
if ( !mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` ='$_POST[email]'")))
  message( 'Аккаунт не найден' );

  $code = random_str(5);

$_SESSION ['confirm'] = array(
  'type' => 'recovery',
  'email' => $_POST['email'],
  'code' => $code,
);

send_mail($_POST['email'],'Восстановление пароля', "Код подтверждения для восстановление пароля</br>$code");


go('confirm');
}


//Страница подтверждения
else if ($_POST['confirm_f']) {

	if ( $_SESSION['confirm']['type'] == 'registr') {


		if ( $_SESSION['confirm']['code'] != $_POST['code'] )
				message('Код подтверждения регистрации указан неверно');


			mysqli_query($CONNECT, 'INSERT INTO `users` VALUES ("", "'.$_SESSION['confirm']['email'].'", "'.$_SESSION['confirm']['password'].'",0)');
			unset($_SESSION['confirm']);

			go('login');


	}
   else if ( $_SESSION['confirm']['type'] == 'recovery') {


		if ( $_SESSION['confirm']['code'] != $_POST['code'] )
				message('Код подтверждения регистрации указан неверно');

        $newpass = random_str(10);


			mysqli_query($CONNECT, 'UPDATE `users` SET `password` = "'.md5($newpass).'" WHERE `email` = "'.$_SESSION['confirm']['email'].'"');
      send_mail($_SESSION['confirm']['email'],'Восстановление пароля', "Новый пароль</br>$newpass");
      unset($_SESSION['confirm']);
			go('login');


	}else if ( $_SESSION['confirm']['type'] == 'login') {
    if ( $_SESSION['confirm']['code'] != $_POST['code'] )
        message('Код подтверждения регистрации указан неверно');
        go_auth($_SESSION['confirm']['data']);


  }

	else not_found();


}




?>
