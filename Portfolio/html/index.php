<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link id="myTemplate" rel="stylesheet" type="text/css" title="style" href="../stylecss/style.css">
	<link id="myTemplate2" rel="alternate stylesheet" type="text/css" title="styleDark" href="../stylecss/styleDark.css">
	<title>Portfolio</title>
	<script src="https://use.fontawesome.com/df08659756.js"></script>
	<script src="../js/theme.js"></script>
</head>
<body>
	<div class="container-fluid">
		<?php require '../php/header.php'; ?>
		<div id="bienvenue">
			<h1><mark>BIENVENUE SUR <br> MON PORTFOLIO </mark></h1>
		</div>
		<hr>
		<div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">A PROPOS</h2>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<img id="mePicture" src="../img/PictureOfMe.jpeg">
					</div>
					<div class="col-lg-8">
						<p class="margBot">
							Salut ! Moi ? C'est Sophie, 22 ans, née le 11 novembre 1997 à Lagny-sur-Marne. Passionnée par la vie, l'art et la création. La photographie alliant création, art ainsi qu'une immortalisation de moments de la vie, c'est naturellement vers cela que je me suis tourné pour mes passes-temps. Souhaitant en faire plus qu'un passe-temps je suis actuellement en étude de Création & Design avec pour objectif ma professionnalisation dans le domaine du design. Qu'il s'agisse de photographie, de maquettage web, de création d'affiches publicitaires, ... j'ai déjà réalisée divers projets présents ici-même.
						</p>
						<br>
						<div class="text-center">
							<a href="apropos.html" id="enSavoirPlus">En savoir plus →</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php require '../php/formulaire.php'; ?>
		<hr>
		<?php require '../php/footer.php'; ?>
	</div>
</body>
</html>