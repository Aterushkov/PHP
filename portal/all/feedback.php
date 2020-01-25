<?php top ('Обратная связь')?>
<body>
<div class="wrapper">
<?php menu() ?>
<div class="content">
<div class="block">
<h1>Обратная связь<h1>

<p><input type="text" placeholder="E-mail" value="<?=$_SESSION['email']?>" id="email"></p>
<p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><textarea id="message" placeholder="Введите Ваше сообщение" class="lents"></textarea></p>
<p><button onclick="post_query('mail','feedback','email.message.captcha')">Отправить сообщение</button></p>
</div>
</div>
</div>
</body>
</html>
