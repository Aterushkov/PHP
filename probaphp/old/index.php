<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="styles/site.css">
	<link rel="stylesheet" href="styles/mains.css">
		<link rel="stylesheet" href="styles/shops.css">
	 <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
		<?php include "templates/allProduct.php"
		?>
</head>
<body>
<header>

<div id="hederInside">
	<a id="logo" href="#"></a>
	<div id="companyName">NEW VISION IN WEB</div>
	<div id="navMenu">
		<a href="/">Главная</a>
		<a href="index.php?page=shop">Каталог</a>
		<a href="#">Цены</a>
		<a href="#">Контакты</a>
	</div>
</div>
</header>
<div id="content">
	<?php
$page = $_GET['page'];

if (!isset($page)) {
	require('templates/main.php');
}elseif ($page == 'shop'){
		require('templates/shop.php');
}elseif ($page == 'product') {
	$id = $_GET['id'];
	$produkt = [];
	foreach ($produkts as $product) {
		if ($product['id'] == $id) {
			$produkt = $product;
			break;
		}
	}
	require('templates/openProduct.php');
}
?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/email.png" class="contactIcon">
                 <a href="#" class="footerlinks">aterushkov@yandex.ru</a>
            </div>
            <div class="contactWrap">
                <img src="images/phone.png" class="contactIcon">
                <a  class="footerlinks" href="#">8 902 150 19 52</a>

            </div>
            <div class="contactWrap">
                <img src="images/place.png" class="contactIcon">
                 <a  class="footerlinks" href="#">Екатеринбург, Татищева</a>
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
         <a href="index.php?page=shop">Каталог</a>
		 <a href="#">Цены</a>
		 <a href="#">Контакты</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk.png">
            <img class="socialItem" src="images/inst.png">
        </div>

        <div id="copyrights">&copy; ReStyle</div>
    </div>
</footer>

</body>
</html>
