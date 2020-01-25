<?php top('Восстановление пароля') ?>
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
<h1>Восстановление пароля<h1>
<p><input type="text" placeholder="Логин" id="email"></p>
<p><input type="text" placeholder="<?php captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform','recovery','email.captcha')">Восстановить пароль</button></p>
<p><button onclick="go('registr')">Зарегистрироваться</button> <button onclick="go('login')">Войти в систему</button></p>
</div>
</div>
</div>
</body>
</html>
