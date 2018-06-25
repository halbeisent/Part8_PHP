<?php
// On doit inclure le session_start(); pour accéder aux variables de session
session_start();
$_SESSION['firstName'] = 'Thibault';
$_SESSION['lastName'] = 'Halbeisen';
session_write_close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 Partie 8 PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="rule">
    <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
      Il faudra afficher le contenu de ces variables sur la deuxième
    </p>
  </div>
  <div class="answer">
    <p>Je rentre mon nom et mon prénom dans les variables, le lien me redirige vers la page hello.php et affiche mes variables</p>
    <a href="hello.php">Page de réponse</a>
  </div>
</body>
</html>
