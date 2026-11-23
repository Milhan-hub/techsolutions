<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechSolutions : l'entreprise</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include "inc/menu.php"; ?>
  <h1>L'entreprise</h1>

  <h2>Notre histoire</h2>
  <p>TechSolutions a été créée à Brive-la-Gaillarde pour aider les petites entreprises de la région à gérer leur informatique. Texte provisoire : l'histoire complète sera rédigée plus tard.</p>
  <table>   
  <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Service</th>
        <th>Rôle</th>
      </tr>   
  <?php foreach ($utilisateurs as $u) { ?>
         <tr>
        <td><?php echo $u["prenom"]; ?></td>
        <td><?php echo $u["nom"]; ?></td>
        <td><?php echo $u["service"]; ?></td>
        <td><?php echo $u["role"]; ?></td>
      </tr>
         <?php } ?>
    </table>
  <h2>Notre équipe</h2>
  <ul>
    <li>Un responsable technique</li>
    <li>Deux techniciens de maintenance</li>
    <li>Un conseiller clientèle</li>
  </ul>

  <p>TechSolutions · 12 avenue de la République, 19100 Brive-la-Gaillarde · 05 55 00 00 00</p>
</body>
</html>
