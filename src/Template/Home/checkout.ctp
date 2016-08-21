<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<!--Core CSS-->
	<?php include LAYOUT_DIR . 'front-css.ctp'; ?>

	<!--script-->
	<?php include LAYOUT_DIR . 'front-script.ctp'; ?>


</head>
<body  ng-controller="testController"  ng-app="SampleApp">
	
	<header>
	</header>

	<main>

		<div ng-repeat='item in itemis'>
			<p>Img		:	{{item.item.item_name}}</p>
			<p>Detail   :	{{item.item.item_price}}</p>
		</div>

		
			<button>Order Now!</button>

	</main>

</body>
</html>