<div class="container" id="contact">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>CONTACT</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<form action="../php/traitement_formulaire.php" method="post" name="contact_form">
						<div class="row">
							<div class="col-lg-6">
							    <div>
							        <label for="name">Nom :</label>
							        <input type="text" id="name" name="user_name" value="<?php if (
isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
							    </div>
							    <div>
							        <label for="firstname">Prenom :</label>
							        <input type="text" id="firstname" name="firstname" value="<?php if
 (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
							    </div>
							    <div>
							        <label for="mail">e-mail :</label>
							        <input type="text" id="mail" name="user_mail" value="<?php if 
(isset($_POST['user_mail'])) echo htmlspecialchars($_POST['user_mail']);?>">
							    </div>
							    <div>
							        <label for="msg">Message :</label>
							        <textarea id="msg" name="user_message">
							        	<?php if (isset($_POST[
'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?>
							        </textarea>
							    </div>
							    <div class="button">
							        <button type="submit" class="square_btn">
							        <span>Envoyer</span>
							        </button>
							    </div>
							</div>
							<div class="col-lg-6">
								<img id="contactPicture" src="../img/contactPicture.jpg">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>