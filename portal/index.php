<?php
if ($_SERVER['REQUEST_URI']== '/' ) $page = 'home';
else {
  $page = substr($_SERVER['REQUEST_URI'], 1);
  if ( !preg_match('/^[A-z0-9]{3,15}$/', $page)) not_found();//проверка на символы (думаю можно будет удалить)
}
require 'function/database.php';
require 'function/top.php';
require 'function/menu.php';
require 'function/bbcodef.php';
require 'function/captcha.php';
require 'function/validation.php';
require 'function/randoms.php';
require 'function/sendmail.php';
require 'function/megono.php';


session_start();

if (file_exists ('all/'.$page.'.php')) include 'all/'.$page.'.php';

else if ($_SESSION['id'] and file_exists ('auth/'.$page.'.php')) include 'auth/'.$page.'.php';

else if (!$_SESSION['id'] and file_exists ('guest/'.$page.'.php')) include 'guest/'.$page.'.php';

else header ('location: /login');


 ?>
