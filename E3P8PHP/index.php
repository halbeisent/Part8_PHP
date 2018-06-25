<?php
  // Je crée des cookies ayant une durée de vie d'un an
  setcookie('login', 'test', time() + 365 * 24 * 3600, null, null, false, true);
  setcookie('password', 'hello', time() + 365 * 24 * 3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3 Partie 8 PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="rule">
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
      A la validation du formulaire, stocker les informations dans un cookie.
    </p>
  </div>
  <div class="answer">
    <form method="post">
      <input type="text" name="id" placeholder="Login" />
      <input type="password" name="password" placeholder="Mot de passe" />
      <input type="submit" name="submitbtn" value="Valider" />
    </form>
    <?php var_dump($_COOKIE) ?>
  </div>
</body>
</html>
