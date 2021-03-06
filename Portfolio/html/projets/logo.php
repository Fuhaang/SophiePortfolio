<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link id="myTemplate" rel="stylesheet" type="text/css" title="style" href="../../stylecss/style.css">
	<link rel="alternate stylesheet" type="text/css" title="styleDark" href="../../stylecss/styleDark.css">
	<title>Mise en page</title>
    <script src="../../js/galery.js"></script>
	<script src="../../js/theme.js"></script>
	<script src="../../js/lightbox-plus-jquery.js"></script>
	<script src="https://use.fontawesome.com/df08659756.js"></script>
</head>

<body>
	<div class="container-fluid">
		<?php require '../../php/headerChild.php'; ?>
		<?php require '../../php/projetNav.php'; ?>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">LOGO</h2>
				</div>
			</div>
			<div class="grid-container" id="try">
			  	<div class="darkNotVisible">
			  		<a href="../../img/projet/logo/LOGO.svg" data-lightbox="logo">
				    	<img id="img1" class='grid-item grid-item-1' src='../../img/projet/logo/LOGO.svg' alt=''>
				    </a>
				</div>
			</div>
		</div>
		<hr>
		<?php require '../../php/footerChild.php'; ?>
	</div>
</body>
</html>