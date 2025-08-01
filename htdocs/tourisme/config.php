<?php

$host = 'sql211.infinityfree.com';
$dbname = 'if0_38771127_tourisme_db';
$user = 'if0_38771127';
$password = 'Hma694306';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur connexion : " . $e->getMessage());
}
?>
