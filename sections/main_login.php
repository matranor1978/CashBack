
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<article class="contact">
						<div class="art-header">
							<h2 class="center">Nouvel utilisateur?</h2>
						</div>
						<!--Warning-->
						<center><?php 
								$text = '<span class = "text1">Merci de votre inscription!</span>';
								if (isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['pwd1']) and isset($_POST['name']) and isset($_POST['prenom']) and isset($_POST['tel'])) {
									echo $text;
								}
								?></center>
						<!---->
						<div class="art-content">
							<div class="inscription_form">
								<form name="form1" id="ff" method="post" action="">
									<label>
									<span>Entrez votre nom:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Entrez votre prénom:</span>
									<input type="text"  name="prenom" id="prenom" required>
									</label>
									<label>
									<label>
									<span>Entrez votre é-mail:</span>
									<input type="email"  name="email" id="email" required>
									</label>
									<label>
									<span>Entrez un mot de passe:</span>
									<input type="password"  name="pwd1" id="pwd1" required>
									</label>
									<label>
									<span>Confirmez le mot de passe:</span>
									<input type="password"  name="pwd2" id="pwd2" required>
									</label>
									<label>
									<span>Entrez votre adresse:</span>
									<input type="text"  name="adresse" id="adresse" required>
									</label>
									<label>
									<span>Entrez votre numéro de téléphone:</span>
									<input type="text"  name="tel" id="tel" required>
									</label>
									<center><input class="sendButton" type="submit" name="Submit" value="S'inscrire"></center>
								</form>
							</div>
						</div>
					</article>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-about">
						<div class="heading"><h4>Déjà membre?</h4></div>
						<!--Warning-->
						<center><?php 
									echo $text2;
								?></center>
						<!---->
							<form name="form1" id="ff" method="post" action="">
								<label>
									<span>É-mail:</span>
									<input type="email"  name="email_login" id="email" required>
								</label>
								<label>
									<span>Mot de passe:</span>
									<input type="password"  name="pwd" id="pwd" required>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Se connecter"></center>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
   
