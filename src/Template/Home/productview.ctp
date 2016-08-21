<!DOCTYPE html>
<html>
<head>
	<base href="/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<link rel="stylesheet" href="/front/public/css/main-style.css">
	<link rel="stylesheet" href="/front/public/css/sub-styles.css">

	<!--cdn/ css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	

	<link rel="stylesheet" href="/front/dist/themes/fontawesome-stars.css">

	<link href="/front/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/front/assets/css/material-kit.css" rel="stylesheet"/>

	<!--scripts-->
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
	<script src="/front/public/js/angular.min.js" /></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.min.js"></script>



    <script src="/front/angular/app.js" /></script>
    <script src="/front/angular/controllers.js" /></script>
    <script src="/front/angular/script.js" /></script>

	<!--Materialize CSS-->

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>



</head>
<body class="index-page" ng-app='SampleApp' ng-controller='ItemDetailsController' >

	<main class="container_14 left-right-container" >

		<div class="left-view" style='border:none;'>
			<div class="left-view-contain" ng-repeat='detail in details'>
				<figure style='border:none;'>
					<img src='{{detail.img_path}}'>

					<div class="thumnail" style='border:none;'>
						<ul style='border:none;'>
							<li><div>
								<figure>
									<img src='/front/public/img/bag1.jpg'>
								</figure>

							</div></li>

							<li><div>
								<figure>
									<img src='/front/public/img/bag1.jpg'>
								</figure>

							</div></li>

							<li><div>
								<figure>
									<img src='/front/public/img/bag1.jpg'>
								</figure>

							</div></li>

							<li><div>
								<figure>
									<img src='/front/public/img/bag1.jpg'>
								</figure>

							</div></li>

						</ul>
					</div>

				</figure>


				<div class='recommended-view'>

					<p class='tags-p'>Tags</p>
					<div class='tags-contain'>

						<a href=''><div class="chip">
							fashion
						</div></a>

						<a href=''><div class="chip">
							clothing
						</div></a>

						<a href=''><div class="chip">
							commerce
						</div></a>

						<a href=''><div class="chip">
							e-commerce
						</div></a>

					</div>


					<div style='display: none;'>
						<p class="recommend-p">Recommended for you</p>

						<div class='recommend-slide'>

						</div>

					</div>

				</div>


			</div>
		</div>

		<div class="right-view">

			<div class="right-view-contain">
				<div class='detail-view'>
					<a class='back-to-home' href='/clothing'>Back to home</a>
					<p class="name">Mayday Parade</p>
					<p class="price">P 125.00</p>

					<article>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet gravida turpis, sit amet cursus nisl. Donec malesuada nulla vitae ex cursus feugiat. Etiam luctus commodo luctus. Nunc placerat odio dictum, egestas odio quis, tristique magna. Mauris commodo egestas bibendum. Praesent at lectus vel lorem euismod rutrum. Suspendisse tincidunt odio mauris, id commodo massa eleifend eu. Fusce sollicitudin, magna id rhoncus pellentesque.

					</article>

				</div>

				<div class='size-view'>

					<p>Choose a Size</p>
					<ul>
						<a href=''><li>S</li></a>
						<a href=''><li>M</li></a>
						<a href=''><li>L</li></a>
						<a href=''><li>XL</li></a>
					</ul>

				</div>

				<div class='color-view'>
					<p>Choose a Color</p>

					<div class="color-view-choose">

						<ul>
							<li>
								<div class="radio">
									<label data-toggle="tooltip" data-placement="top" title="Black" data-container="body">
										<input type="radio" name="optionsRadios" checked="true">

									</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<label data-toggle="tooltip" data-placement="top" title="Beige" data-container="body">
										<input type="radio" name="optionsRadios" checked="true">

									</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
										<input type="radio" name="optionsRadios" checked="true">

									</label>
								</div>
							</li>
						</ul>

					</div>


					<div class='option-view-select'>
						<ul>
							<li>
								<p class='quantity-p'
								style='font-size: 20px;'>Quantity</p>
							</li>

							<li>
								<button type='button' class='math'>-</button>
								<input type='text'  style='width:40px;'>
								<button type='button' class='math'>+</button>
							</li>

							<li>
							</li>

							<li>
							</li>

							<li style='display: none;'>
								<button class='add-to-cart'>Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
							</li>

							<li style='display: none;'>
								<button class='add-to-cart' style='background: transparent;color:#000;border:solid 1px;'> <i class="fa fa-heart-o" aria-hidden="true"></i></button>
							</li>
						</ul>

					</div>

				</div>

				<div class='review-view'>
					<p class="review-about">Review(s) about this Item... <i class="fa fa-comment-o" aria-hidden="true"></i></p>
					<div class="user-view">
						<img src=''>

						<div class='user-inputs'>

							<div class="form-group title-place">

								<input type="text" value="" placeholder="Place your Title" class="form-control" />

							</div>

							<div class="form-group message-place">
								<textarea name="" class='form-control' placeholder="Enter a message here"></textarea>
							</div>


							<p class="how-would">How would you rate this product?</p>

							<div class="rate-a-product">

								<div class="stars stars-example-bootstrap">
									<select id="productrate" name="rating">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>

								<button type="submit" class="btn btn-success">Submit</button>

							</div>


						</div>
					</div>


					<ul class='user-view-display'>
						
						<div class='user-message-item'>
							<img src=''>
							<div class='rate-a-message'>
								<p>Rate here</p>

								<div class='user-message'>
									<p class='title-here'>Title</p>
								</div>

								<div class='user-message'>
									<p class='user-msg'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet gravida turpis, sit amet cursus nisl. Donec malesuada nulla vitae ex cursus feugiat. Etiam luctus commodo luctus. Nunc placerat odio dictum, egestas odio quis, tristique magna. Mauris commodo egestas bibendum. Praesent at lectus vel lorem euismod rutrum. Suspendisse tincidunt odio mauris, id commodo massa eleifend eu. Fusce sollicitudin, magna id rhoncus pellentesque. </p>
								</div>

								<div class='user-message'>
									<p class='user-view-name'>Date</p>
									
								</div>
							</div>


						</div>

					</ul>





				</div>
			</div>

		</div>

	</main>
</body>


<!--Core JS files-->
<script src="/front/assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="/front/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/front/assets/js/material.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>




<script src="/front/assets/js/material-kit.js" type="text/javascript"></script>

<script src="/front/dist/jquery.barrating.min.js"></script>

<script>
	$(function() {
		$('#productrate').barrating({
			theme: 'fontawesome-stars'
		});
	});

</script>

</html>