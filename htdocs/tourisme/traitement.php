<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $destination = htmlspecialchars($_POST['destination']);
    $date_arrivee = $_POST['date_arrivee'];

    if ($email && $date_arrivee) {
        $sql = "INSERT INTO demandes (nom, prenom, telephone, email, destination, date_arrivee)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $telephone, $email, $destination, $date_arrivee]);

        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Email ou date invalide.";
    }
}
?>
