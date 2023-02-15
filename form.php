<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SheHacks</title>
    <!--<link rel="stylesheet" href="style.css">-->

</head>

<body>
<?php include("_header.php") ?>

<div class="container">
	<div class="column is-12">
		<section class="hero is-info is-bold is-small">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Hello <?php echo $_GET['firstname'] .' '. $_GET['lastname'] . ' from ' . $_GET['campus']; ?> this is your message : </h1>
					<h2 class="subtitle"> <?php echo $_GET['message']; ?></h2>
				</div>
			</div>
		</section>
	</div>
</div>
<?php include("_footer.php"); ?>
</body>
</html>