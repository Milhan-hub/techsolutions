<?php
include "inc/infos.php";

// Les tarifs hors taxes et le taux de TVA, écrits une seule fois
$essentiel = 60;
$serenite = 150;
$premium = 290;
$tva = 20;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechSolutions : nos services</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include "inc/menu.php"; ?>
  <h1>Nos services</h1>

  <h2>Ce que nous proposons</h2>
  <ul>
    <li>Dépannage des ordinateurs et du réseau</li>
    <li>Maintenance et mises à jour</li>
    <li>Sauvegarde des données</li>
    <li>Installation de postes et de logiciels</li>
  </ul>

  <h2>Nos formules</h2>
  <table>
    <tr>
      <th>Formule</th>
      <th>Contenu</th>
      <th>Tarif HT</th>
      <th>Tarif TTC</th>
    </tr>
    <tr>
      <td>Essentielle</td>
      <td>Dépannage à la demande</td>
      <td>49 €</td>
      <td><?php echo $essentiel * (1 + $tva / 100); ?> €</td>
    </tr>
    <tr>
      <td>Confort</td>
      <td>Dépannage et maintenance</td>
      <td>99 €</td>
      <td><?php echo $serenite * (1 + $tva / 100); ?> €</td>
    </tr>
    <tr>
      <td>Sérénité</td>
      <td>Dépannage, maintenance et sauvegarde</td>
      <td>149 €</td>
      <td><?php echo $premium * (1 + $tva / 100); ?> €</td>
    </tr>
  </table>

  <p>TechSolutions · 12 avenue de la République, 19100 Brive-la-Gaillarde · 05 55 00 00 00</p>
</body>
</html>
