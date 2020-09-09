<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" title="style" href="../../stylecss/style.css">
	<link rel="alternate stylesheet" type="text/css" title="styleDark" href="../../stylecss/styleDark.css">
	<title>Portfolio - Photo animaux</title>
    <script src="../../js/galery.js"></script>
	<script src="../../js/theme.js"></script>
	<script src="../../js/lightbox-plus-jquery.js"></script>
	<script src="https://use.fontawesome.com/df08659756.js"></script>
</head>

<body>
	<div class="container-fluid">
		<?php require '../../php/headerChild.php'; ?>
		<?php require '../../php/photoNav.php'; ?>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">ANIMAUX</h2>
				</div>
			</div>
			<div class="grid-container" id="try">
			  	<div>
			  		<a href="../../img/photos/animaux/photo_23.jpg" data-lightbox="animaux">
				    	<img id="img1" class='grid-item grid-item-1' src='../../img/photos/animaux/photo_23.jpg' alt=''>
				    </a>
				</div>
				<div>
			  		<a href="../../img/photos/animaux/photo_24.jpg" data-lightbox="animaux">
				    	<img id="img2" class='grid-item grid-item-1' src='../../img/photos/animaux/photo_24.jpg' alt=''>
				    </a>
				</div>
				<div>
			  		<a href="../../img/photos/animaux/photo_6.jpg" data-lightbox="animaux">
				    	<img id="img3" class='grid-item grid-item-1' src='../../img/photos/animaux/photo_6.jpg' alt=''>
				    </a>
				</div>
			</div>
		<?php require '../../php/footerChild.php'; ?>
		</div>
		<hr>
		
	</div>
</body>
</html>