<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link id="myTemplate" rel="stylesheet" type="text/css" title="style" href="../stylecss/style.css">
	<link rel="alternate stylesheet" type="text/css" title="styleDark" href="../stylecss/styleDark.css">
	<title>Porfolio - Vidéos</title>
	<script src="https://use.fontawesome.com/df08659756.js"></script>
	<script src="../js/theme.js"></script>
</head>

<body>
	<div class="container-fluid">
		<?php require '../php/header.php'; ?>
		<div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">VIDEOS</h2>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<iframe class="videoStyle" width="100%" height="300" src="https://www.youtube.com/embed/xDsqP54MytI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-lg-4">
						<iframe class="videoStyle" width="100%" height="300" src="https://www.youtube.com/embed/Zjno8NF8uGQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-lg-4">
						<iframe class="videoStyle" width="100%" height="300" src="https://www.youtube.com/embed/RowHHa0G9Z8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-lg-4">
						<video class="videoStyle" width="100%" height="300" controls>
	 						<source src="../videos/parallaxe.mp4" type="video/mp4">
	 						Your browser does not support the video tag.
						</video>
					</div>
					<div class="col-lg-4">
						<video class="videoStyle" width="100%" height="300" controls>
	 						<source src="../videos/visiteMuseeLV.mp4" type="video/mp4">
	 						Your browser does not support the video tag.
						</video>
					</div>


						
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php require '../php/footer.php'; ?>
	</div>
</body>
</html>