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
  <title>TechSolutions : espace salariés</title>
  <h1>espace salariés</h1>
      <form action="verifier.php" method="post">
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <button type="submit">Se connecter</button>
      </p>
    </form>



    <?php  include "inc/pied.php"; ?>
</body>
</html>