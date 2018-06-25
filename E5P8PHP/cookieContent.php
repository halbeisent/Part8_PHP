<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5 Partie 8 - Affichage et mise à jour du cookie</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="rule">
            <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
                Page d'affichage et de mise à jour du cookie</p>
        </div>
        <div class="answer">
            <form method="post" action="cookieContent.php">
                <input type="text" placeholder="Login" name="id" />
                <input type="password" placeholder="Mot de passe" name="password" />
                <input type="submit" name="submitBtn" value="Mettre à jour le cookie" />
            </form>
            <?php
            echo sprintf ('Bonjour %s, après mise à jour, ton mot de passe est: %s', $_COOKIE['login'], $_COOKIE['password']);
            setcookie('login', $_POST['id'], time() + 365 * 24 * 3600, '/');
            setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/');
        ?>
        </div>
    </body>
</html>
