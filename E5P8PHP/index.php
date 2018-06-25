<?php
if (isset($_POST['id']) && isset($_POST['password'])) {
  // Je crée des cookies ayant une durée de vie d'un an
  setcookie('login', $_POST['id'], time() + 365 * 24 * 3600, '/');
  setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 Partie 8 PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="rule">
            <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        </div>
        <div class="answer">
            <form method="post" action="cookieContent.php">
                <input type="text" name="id" placeholder="Login" />
                <input type="password" name="password" placeholder="Mot de passe" />
                <input type="submit" name="submitbtn" value="Valider" />
            </form>
        </div>
    </body>
</html>
