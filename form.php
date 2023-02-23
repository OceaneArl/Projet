<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SheHacks</title>
	<link rel="stylesheet" href="contact-style.css">
</head>

<body>
	<?php include "_header.php"; ?>
	<div class="container">
		<section class="hero is-info is-bold is-small">
			<h1 class="title">Votre message a bien été envoyé !</h1>
			<p> Merci
				<?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?> de nous avoir contacté à
				propos de
				<?php echo $_POST['subject']; ?>. L'un des membres de notre équipe prendra contact avec
				vous par email à l'adresse
				<?php echo $_POST['email']; ?> ou par téléphone au
				<?php echo $_POST['tel']; ?> dans les meilleurs délais pour traiter votre message.
				</ br>
				Pour rappel, voici votre message :
				<?php echo $_POST['message']; ?>
			</p>
		</section>
	</div>
	<?php include("_footer.php"); ?>
</body>

</html>