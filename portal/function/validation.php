<?
function email_valid(){
  if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL))
  message('email неверный!');
}

function password_valid(){
    if ( !preg_match('/^[A-z0-9]{7,25}$/', $_POST['password']))
  message('пароль неверный!');
  $_POST['password'] = md5($_POST['password']);
}
?>
