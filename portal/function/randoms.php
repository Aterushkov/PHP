<?
function random_str( $num = 30 ){
  return substr (str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,$num);
}
?>
