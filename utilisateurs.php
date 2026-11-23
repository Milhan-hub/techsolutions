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
  <title>TechSolutions : gestion des utilisateurs</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <ul class="menu">
      <li><a class="lien-menu" href="index.php">Accueil</a></li>
      <li><a class="lien-menu" href="services.php">Nos services</a></li>
      <li><a class="lien-menu" href="entreprise.php">L'entreprise</a></li>
      <li><a class="lien-menu" href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <h1>Gestion des utilisateurs</h1>

  <h2>Notre histoire</h2>
  <p>TechSolutions a été créée à Brive-la-Gaillarde pour aider les petites entreprises de la région à gérer leur informatique. Texte provisoire : l'histoire complète sera rédigée plus tard.</p>
 <p>Nombre de comptes: <?php echo count($utilisateurs); ?></p>
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
</body>
<footer>
  <?php
  include "inc/pied.php";
  ?>
</footer>
</html>
