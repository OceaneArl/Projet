<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SheHacks</title>
  <link rel="stylesheet" href="contact-style.css" />
  <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    /> -->
</head>

<body>
  <h2>Nous contacter</h2>
  <div class="container">
    <form action="form.php" method="POST">
      <div class="row">
        <div class="col-25">
          <label for="firstname">Prénom</label>
        </div>
        <div class="col-75">
          <input type="text" id="firstname" name="firstname" placeholder="Prénom" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lastname">Nom</label>
        </div>
        <div class="col-75">
          <input type="text" id="lastname" name="lastname" placeholder="Nom" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="email" size="30" placeholder="exemple@email.com" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="tel">Téléphone</label>
        </div>
        <div class="col-75">
          <input type="tel" id="tel" name="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"
            placeholder="01 23 45 67 89" minlength="10" maxlength="14" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Sujet</label>
        </div>
        <div class="col-75">
          <input type="text" id="subject" name="subject" placeholder="Sujet" required />
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="message">Message</label>
        </div>
        <div class="col-75">
          <textarea id="message" name="message" placeholder="Saisir votre message" required></textarea>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="row">
          <input type="submit" value="Envoyer" />
          <!-- <button class="button is-link has-background-alt">Envoyer</button> -->
        </div>
    </form>
  </div>
  <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script> -->
</body>

</html>