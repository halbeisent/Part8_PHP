<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 8 PHP</title>
</head>
<body>
  <div class="rule">Faire une page HTML permettant de donner à l'utilisateur :
    <ul>
      <li>son User Agent</li>
      <li>son adresse ip</li>
      <li>le nom du serveur</li>
    </ul>
  </div>
  <div class="answer">
    <ul>
      <li><?= sprintf('L\User agent est: %s', $_SERVER['HTTP_USER_AGENT']); ?></li>
      <li><?= sprintf('L\'Adresse ip est: %s', $_SERVER['REMOTE_ADDR']); ?></li>
      <li><?= sprintf('Le nom du serveur est: %s', $_SERVER['SERVER_NAME']); ?></li>
    </ul>
  </div>
</body>
</html>
