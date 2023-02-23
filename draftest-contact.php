<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SheHacks</title>
  <link rel="stylesheet" href="draftest-contact.css" />
</head>

<main>

  <body>

    <?php include "_header.php"; ?>

    <div class="container">
      <h1>Nous contacter</h1>

      <form action="form.php" method="POST">

        <div class="row">
          <label for="firstname" class="col-25">Prénom</label>
          <input type="text" class="col-75" id="firstname" name="firstname" placeholder="Prénom" required />
        </div>

        <div class="row">
          <label for="lastname" class="col-25">Nom</label>
          <input type="text" class="col-75" id="lastname" name="lastname" placeholder="Nom" required />
        </div>

        <div class="row">
          <label for="email" class="col-25">Email</label>
          <input type="email" class="col-75" id="email" name="email" size="30" placeholder="exemple@email.com"
            required />
        </div>

        <div class="row">
          <label for="tel" class="col-25">Téléphone</label>
          <input type="tel" class="col-75" id="tel" name="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
            placeholder="01 23 45 67 89" minlength="10" maxlength="14" required />
        </div>

        <div class="row">
          <label for="subject" class="col-25">Sujet</label>
          <input type="text" class="col-75" id="subject" name="subject" placeholder="Sujet" required />
        </div>

        <div class="row">
          <label for="message" class="col-25">Message</label>
          <textarea id="message" class="col-75" name="message" placeholder="Saisir votre message" required></textarea>
        </div>

        <div class="row">
          <input type="submit" value="Envoyer" />
        </div>
      </form>
    </div>

    <?php include("_footer.php"); ?>

  </body>
</main>

</html>