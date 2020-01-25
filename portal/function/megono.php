<?
function message ( $text ){
  exit('{"message" :"'.$text.'"}');
}

function go ( $url ){
  exit('{"go" :"'.$url.'"}');
}
function not_found(){
  exit ('Страница не найдена!');
}
?>
