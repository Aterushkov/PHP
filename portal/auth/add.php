<?php

if($_POST['wall_f']){

  mysqli_query($CONNECT, 'INSERT INTO `wall` VALUES ("", "'.$_SESSION['id'].'", "'.mysqli_real_escape_string($CONNECT, $_POST['message']).'")');

  go('wall');
}

?>
