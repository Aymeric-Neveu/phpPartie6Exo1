<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <p><a href="index.php?nom=Neveu&amp;prenom=Aymeric">Dis-moi bonjour !</a></p>
    <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom et un prénom !';
  }
  ?>
  </body>
</html>
