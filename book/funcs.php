<?php
function clear(){
  global $db;
  foreach ($_POST as $key => $val) {
    $_POST[$key] = mysqli_real_escape_string($db,$val);
  }
}

function seve_mess(){
  global $db;
  clear();
  extract($_POST);
  // $name = mysqli_real_escape_string($db,$_POST['name']);
  // $text = mysqli_real_escape_string($db,$_POST['text']);
  $query = "INSERT INTO tablename (name,text) VALUES ('$name','$text')";
  mysqli_query($db, $query);
}

function get_mess(){
  global $db;
  $query = "SELECT * FROM tablename ORDER BY id DESC";
  $res = mysqli_query($db, $query);
  return mysqli_fetch_all($res,MYSQLI_ASSOC);
}

function print_mess($arr){
  echo '<pre>'. print_r($arr, true) .'</pre>';
}
