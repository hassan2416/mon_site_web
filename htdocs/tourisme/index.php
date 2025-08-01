<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Demande Touristique</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <!--EN-TETE--> 
 <header> 
  <img class="logo" src="../images/logo1.jpg" alt="logo-habib-location">

  <!-- Bouton menu -->
  <button class="menu-toggle" aria-label="Menu">&#9776;</button>

  <nav>
    <ul class="nav-list">
      <li><a href="../index.html">Accueil</a></li>
      <li><a href="../galerie.html">Galerie</a></li>
      <li><a href="../apropos.html">À propos</a></li>
      <li><a href="index.php">Réservation</a></li>
      <li><a href="../interactive.html">Page interactive</a></li>
    </ul>
  </nav>
</header>
<!--FORMULAIRE AVEC PHP--->
  <h1 class="formh1">Formulaire de réservation</h1>
  <form method="post" action="traitement.php">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="tel" name="telephone" placeholder="Téléphone" pattern="[0-9]{8,15}" required>
    <input type="email" name="email" placeholder="Email" required>
    
    <label for="destination">Destination souhaitée :</label>
    <select name="destination" id="destination" required>
      <option value="Foret du Day">Forêt du Day</option>
      <option value="Bankoualé">Bankoualé</option>
      <option value="Lac Assal">Lac Assal</option>
      <option value="Lac Abbé">Lac Abbé</option>
      <option value="Toutes destinations">Toutes destinations</option>
    </select>

    <label for="date_arrivee">Date d'arrivée :</label>
    <input type="date" name="date_arrivee" id="date_arrivee" required>

    <button type="submit">Envoyer</button>
  </form>

  <h2 class="formh2">Demandes reçues :</h2>
  <table border="1">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Téléphone</th>
      <th>Email</th>
      <th>Destination</th>
      <th>Date d'arrivée</th>
    </tr>

    <?php
    $sql = "SELECT * FROM demandes ORDER BY id DESC";
    foreach ($pdo->query($sql) as $row) {
        echo "<tr>
                <td>".htmlspecialchars($row['nom'])."</td>
                <td>".htmlspecialchars($row['prenom'])."</td>
                <td>".htmlspecialchars($row['telephone'])."</td>
                <td>".htmlspecialchars($row['email'])."</td>
                <td>".htmlspecialchars($row['destination'])."</td>
                <td>".htmlspecialchars($row['date_arrivee'])."</td>
              </tr>";
    }
    ?>
  </table>
</body>
</html>
