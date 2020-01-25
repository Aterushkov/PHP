<?function captcha_show(){
  $question = array(
     1 => 'Столица России?',
     2 => 'Москва слезам не?',
     3 => 'Снигери не ...?',
     4 => 'Требуют наши сердца?',
     5 => 'Белый Бим, черное...?',
     6 => 'Уходя гасите...?',
   );
     $num = mt_rand(1, count($question));
     $_SESSION['captcha'] = $num;

     echo $question[$num];
}

function captcha_valid(){
  $answers = array(
     1 => 'москва',
     2 => 'верит',
     3 => 'гири',
     4 => 'перемен',
     5 => 'ухо',
     6 => 'свет',
   );
if ( $_SESSION['captcha'] != array_search( strtolower($_POST['captcha']), $answers))
message('Ответ неверный!');

}
?>
