  <?php include "inc/infos.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechSolutions : contact</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include "inc/menu.php"; ?>
  </nav>
  <h2>Nos coordonnées</h2>
    <p><strong>Téléphone :</strong> <?php echo  $telephone; ?></p>
    <p><strong>Adresse :</strong> <?php echo $adresse; ?></p>

  <h2>Horaires d'ouverture</h2>
  <ul>
    <li>Du lundi au vendredi : 8h30 - 12h30 et 14h - 18h</li>
    <li>Samedi et dimanche : fermé</li>
  </ul>

</body>
</html>
