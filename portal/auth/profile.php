<?php top ('Профайл')?>
<body>
<div class="wrapper">
<?php menu() ?>
<div class="content">
<div class="block">
<h1>Привет <?=$_SESSION['id']?><h1>

<p><input type="text" placeholder="ФИО" id="fio"></p>
<p><button onclick="post_query('aform','edit','fio')">Изменить ФИО</button></p>
<p><input type="password" placeholder="Новый пароль" id="password"></p>
<p><button onclick="post_query('aform','edit','password')">Изменить пароль</button></p>
<p><select class="lents" id="protected">
<?=str_replace('"'.$_SESSION['protected'].'"', '"'.$_SESSION['protected'].'"selected', '<option value="0">Подтверждение входа Выкл.</option>
<option value="1">Подтверждение входа Вкл.</option>')?>
</select>
</p>
<p><button onclick="post_query('aform','edit','protected')">Изменить защиту</button></p>
</div>
</div>
</div>
</body>
</html>
