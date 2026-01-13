<?php
// Connexion à la base de données (ajuste avec tes identifiants)
$host = 'localhost';
$dbname = 'jeu2';
$user = 'root';
$pass = ''; // Vide si tu utilises XAMPP par défaut

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les jeux
    $sql = "SELECT * FROM jeu";
    $stmt = $pdo->query($sql);
    $jeux = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des jeux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>🎮 Liste des Jeux</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Genre</th>
                <th>Date de sortie</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jeux as $jeu): ?>
                <tr>
                    <td><?= htmlspecialchars($jeu['idJeu']) ?></td>
                    <td><?= htmlspecialchars($jeu['titre']) ?></td>
                    <td><?= htmlspecialchars($jeu['genre']) ?></td>
                    <td><?= htmlspecialchars($jeu['dateSortie']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
