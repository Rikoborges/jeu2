<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un jeu</title>
</head>
<body>
    <h2>Ajouter un nouveau jeu</h2>
    <form action="ajouter_jeu.php" method="POST">
        <label>Titre:</label><br>
        <input type="text" name="titre" required><br><br>

        <label>Genre:</label><br>
        <input type="text" name="genre" required><br><br>

        <label>Date de sortie:</label><br>
        <input type="date" name="dateSortie" required><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
