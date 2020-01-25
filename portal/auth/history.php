<?php
top ('История');
$_SESSION['loader'] = 0;
?>
<body>
<div class="wrapper">
<?php menu() ?>
<div class="content">
<div class="block">
<div>Привет <?=$_SESSION['id']?>
</div>
</br>
<div>
<script type="text/javascript">
function load_history(){

$.get( '/loader', function ( data ){

  if (data == 'empty')
     $('#space').text( 'История пуста' );
  else if (data != 'end')
     $('#space').append( data );
}
);
}

</script>

<button onclick="load_history()">Загрузить историю</button>
<div id="space"></div>
</div>
</div>
</div>
</div>
</body>
</html>
