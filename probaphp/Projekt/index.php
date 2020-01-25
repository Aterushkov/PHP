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
	<a id="logo" href="/"></a>
	<div id="companyName">Печатая у нас Вы помомаете детям</div>
	<div id="navMenu">
		<a href="/">Главная</a>
		<a href="index.php?page=shop">Все услуги</a>
		<a href="#">Портфолио</a>
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
                 <a href="#" class="footerlinks">rdfprint@yandex.ru</a>
            </div>
            <div class="contactWrap">
                <img src="images/phone.png" class="contactIcon">
                <a  class="footerlinks" href="#">8 (912) 041 71 88</a>
            </div>
            <div class="contactWrap">
                <img src="images/place.png" class="contactIcon">
                 <a  class="footerlinks" href="#">Екатеринбург, Попова 15</a>
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
         <a href="index.php?page=shop">Все услуги</a>
		 <a href="#">Цены</a>
		 <a href="#">Контакты</a>
        </div>

        <div id="social">
					  <a id="socialItem" href="https://vk.com/rdfprint"></a>
        </div>

        <div id="copyrights">&copy; ReStyle</div>
    </div>
</footer>

</body>
</html>
