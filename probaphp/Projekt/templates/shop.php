<div class="promoTextBlock">
<h1 class="promoText">
Каталог товаров
</h1>
</div>
<div id="shopTopBlock">
<?php foreach ($produkts as $produkt): ?>
<div class="shopUnit">
	<img src="<?php echo $produkt['imgs'];?>"/>
	<div class="shopUnitName">
		<?php echo $produkt['name'];?>
    </div>
    <div class="shopUnitShortDesc">
    	<?php echo $produkt['desc'];?>
    </div>
<div class="shopUnitPrice">
	<?php echo $produkt['price'];?>
</div>
<a href="index.php?page=product&id=<?php echo $produkt['id']; ?>" class="shopUnitMore">
	Подробнее
</a>
</div>
<?php endforeach; ?>
</div>
