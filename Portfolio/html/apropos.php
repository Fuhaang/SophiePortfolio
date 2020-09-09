<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link id="myTemplate" rel="stylesheet" type="text/css" title="style" href="../stylecss/style.css">
	<link rel="alternate stylesheet" type="text/css" title="styleDark" href="../stylecss/styleDark.css">
	<title>Porfolio - A Propos</title>
	<script src="https://use.fontawesome.com/df08659756.js"></script>
	<script src="../js/theme.js"></script>
</head>

<body>
	<div class="container-fluid">
		<?php require '../php/header.php'; ?>
		<div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">A PROPOS</h2>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<img id="aProposPicture" src="../img/pictureAPropos.jpeg">
					</div>
					<div class="col-lg-8">
						<p>
							Sophie Chea, petite, passionnée par la vie, l'art et la création. La photographie alliant création, art ainsi qu'une immortalisation de moments de la vie, c'est naturellement vers cela que je me suis tourné pour mes passes-temps. Souhaitant en faire plus qu'un passe-temps je suis actuellement en étude de Création & Design avec pour objectif ma professionnalisation dans le domaine du design. Qu'il s'agisse de photographie, de maquettage web, de création d'affiches publicitaires, ... j'ai déjà réalisée divers projets présents ici-même.
						</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<!--
					<video width="800" height="100%" controls>
	 					<source src="../videos/test.mp4" type="video/mp4">
	 					Your browser does not support the video tag.
					</video>
				-->
				</div>
				<hr>
				<div class="col-lg-12 text-center">
						<embed src=../pdf/CV.pdf width=800 height=1161 type='application/pdf'/>
				</div>
			</div>
		</div>
		<?php require '../php/footer.php'; ?>
	</div>
</body>


</html>