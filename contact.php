<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SheHacks</title>
  <link rel="stylesheet" href="contact-style.css" />
  <!--<link rel="stylesheet" href="style.css">-->
  <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    /> -->
</head>

<body>
  <?php include "_header.php"; ?>
  <h1>Nous contacter</h1>
  <div class="container">

    <form action="form.php" method="POST">
      <div class="row">
        <label for="firstname" class="col-25">Prénom</label>
        <br>
        <input type="text" class="col-75" id="firstname" name="firstname" placeholder="Prénom" required />
      </div>
      <div class="row">
        <label for="lastname" class="col-25">Nom</label>
        <br>
        <input type="text" class="col-75" id="lastname" name="lastname" placeholder="Nom" required />
      </div>
      <div class="row">
        <label for="email" class="col-25">Email</label>
        <br>
        <input type="email" class="col-75" id="email" name="email" size="30" placeholder="exemple@email.com" required />
      </div>
      <div class="row">
        <label for="tel" class="col-25">Téléphone</label>
        <br>
        <input type="tel" class="col-75" id="tel" name="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
          placeholder="01 23 45 67 89" minlength="10" maxlength="14" required />
      </div>
      <div class="row">
        <label for="subject" class="col-25">Sujet</label>
        <br>
        <input type="text" class="col-75" id="subject" name="subject" placeholder="Sujet" required />
      </div>
      <div class="row">
        <label for="message" class="col-25">Message</label>
        <br>
        <textarea id="message" class="col-75" name="message" placeholder="Saisir votre message" required></textarea>
      </div>
      <br />
      <!-- <div class="row">
        <div class="row"> -->
      <input type="submit" value="Envoyer" />
      <!-- <button class="button is-link has-background-alt">Envoyer</button> -->
      <!-- </div> -->
    </form>
  </div>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script> -->
  <?php include("_footer.php"); ?>
</body>

</html>