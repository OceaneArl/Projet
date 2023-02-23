<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SheHacks</title>
    <link rel="stylesheet" href="home-style.css">
</head>

<body>
    <?php include "_header.php"; ?>



    <div id="conteneur">
        <div id="left">
            <h1>Bienvenue</h1>
            <p>Vous doutez de votre partenaire ? <br>
                <source src="assets/video.mp4" type="video/mp4">
                Ne passez pas vos journées dans le noir. <br><br>
                Notre équipe de 5 experts diplômés de la meilleure école de codage de France, vous accompagne dans vos
                démarches. <br><br>
                Domaine conjugal, recherche de personnes disparues, hacking d'appareils... <br><br>
                Spécialistes de la recherche de preuves, nous enquêtons et unissons les preuves nécessaires pour faire
                valoir vos droits dans un cadre juridique. <br><br>
                Demandez vite un devis via notre formulaire contact.
            </p>
        </div>
        <div id="right">
            <!-- The video -->
            <video autoplay muted loop id="myVideo">
                <source src="assets/video.mp4" type="video/mp4">
            </video>

        </div>

    </div>

    <?php include "_footer.php"; ?>

</body>