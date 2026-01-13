<?php
$host = '127.0.0.1';
$db = 'jeu2';
$user = 'root';
$pass = ''; 


try {
    $pdo = new PDO("mysql:host=localhost;dbname=jeu2;charset=utf8mb4", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
