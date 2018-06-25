<!-- On remet le session_start() ici pour accéder aux variables de session -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 Partie 8 PHP - Page de réponse</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="rule">
    <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
      Il faudra afficher le contenu de ces variables sur la deuxième
    </p>
  </div>
  <div class="answer">
    <!-- On affiche les variables de session -->
    <p><?= sprintf('Bonjour %s %s', $_SESSION['firstName'], $_SESSION['lastName']); ?></p>
</body>
</html>
<?php session_write_close(); ?>
