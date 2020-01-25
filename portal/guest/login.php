<?php top('Вход') ?>
<style>
.content {
  background: url(images/DJI409.jpg);
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
</style>
<body>
<div class="wrapper">
<div class="content">
<div class="block">
<h1>Вход в систему<h1>
<p><input type="text" placeholder="Логин" id="email"></p>
<p><input type="password" placeholder="Пароль" id="password"></p>
<p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform','login','email.password.captcha')">Войти</button></p>
<p><button onclick="go('registr')">Зарегистрироваться</button> <button onclick="go('recovery')">Восстановить пароль</button></p>
</div>
</div>
</div>
</body>
</html>
