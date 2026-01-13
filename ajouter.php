<?php
require_once 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Méthode non autorisée");
}

$type = $_POST['type'];

switch ($type) {
    case 'jeu':
        $sql = "INSERT INTO jeu (titre, genre, dateSortie) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['titre'], $_POST['genre'], $_POST['dateSortie']]);
        echo "🎮 Jeu ajouté !";
        break;

    case 'joueur':
        $sql = "INSERT INTO joueur (pseudo, email, dateInscription) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['pseudo'], $_POST['email'], $_POST['dateInscription']]);
        echo "👤 Joueur ajouté !";
        break;

    case 'constructeur':
        $sql = "INSERT INTO constructeur (nom) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['nom']]);
        echo "🚗 Constructeur ajouté !";
        break;

    case 'emprunt':
        $sql = "INSERT INTO emprunt (idJeu, idJoueur, datePret, dateRetour) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['idJeu'],
            $_POST['idJoueur'],
            $_POST['datePret'],
            $_POST['dateRetour'] ?: null
        ]);
        echo "📦 Emprunt ajouté !";
        break;

    case 'plateforme':
        $sql = "INSERT INTO plateforme (idJeu, idConstructeur, nom) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['idJeu'], $_POST['idConstructeur'], $_POST['nom']]);
        echo "🕹️ Plateforme ajoutée !";
        break;

    default:
        echo "❌ Type inconnu";
}
