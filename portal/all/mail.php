<?php

if ($_POST['feedback_f']){
  email_valid();
  captcha_valid();
  mail('aterushkov@yandex.ru','Сообщение с формы обрастной связи', 'E-mail отправителя: <b></br>'.$_POST['email'].'</b> </br> Сообщение: <b></br><p>'.$_POST['message'].'</p></b>');
  message('Сообщение оправлено');
}


?>
