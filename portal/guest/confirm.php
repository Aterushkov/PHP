<?
if ( !$_SESSION['confirm']['code'] ) not_found();

top('Подтверждение') ?>
<style>
.content {
  background: url(images/DJI409.jpg);
  background-size: cover;
}
</style>
<body>
<div class="wrapper">
<div class="content">
<div class="block">

<h1>Подтверждение</h1>


<p><input type="text" placeholder="Код" id="code"></p>
<p><button onclick="post_query('gform', 'confirm', 'code')">Подтвердить</button> </p>
</div>
</div>
</div>
</body>
</html>
