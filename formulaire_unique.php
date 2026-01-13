<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- ESSENCIAL -->
  <title>Formulaire jeu2</title>
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>

<h1>🎮 Gestion Jeu2</h1>

<div class="tab-bar">
  <button class="tab-button active" data-tab="fr_jeu">🎮 Jeu</button>
  <button class="tab-button" data-tab="fr_joueur">👤 Joueur</button>
  <button class="tab-button" data-tab="fr_constructeur">🏭 Constructeur</button>
  <button class="tab-button" data-tab="fr_emprunt">📦 Emprunt</button>
  <button class="tab-button" data-tab="fr_plateforme">🕹️ Plateforme</button>
</div>


<select onchange="afficherFormulaire(this.value)">
    <option value="">— Choisir une table —</option>
    <option value="fr_jeu">Jeu</option>
    <option value="fr_joueur">Joueur</option>
    <option value="fr_constructeur">Constructeur</option>
    <option value="fr_emprunt">Emprunt</option>
    <option value="fr_plateforme">Plateforme</option>
</select>

<!-- Jeu -->
<form id="fr_jeu" class="form-section" action="ajouter.php" method="POST" style="display:none;">
    <input type="hidden" name="type" value="jeu">
    <h2>Ajouter un Jeu</h2>
    <label>Titre :</label><input type="text" name="titre" required><br>
    <label>Genre :</label><input type="text" name="genre" required><br>
    <label>Date de sortie :</label><input type="date" name="dateSortie" required><br>
    <button type="submit">Ajouter Jeu</button>
</form>

<!-- Joueur -->
<form id="fr_joueur" class="form-section" action="ajouter.php" method="POST" style="display:none;">
    <input type="hidden" name="type" value="joueur">
    <h2>Ajouter un Joueur</h2>
    <label>Pseudo :</label><input type="text" name="pseudo" required><br>
    <label>Email :</label><input type="email" name="email" required><br>
    <label>Date d'inscription :</label><input type="date" name="dateInscription" required><br>
    <button type="submit">Ajouter Joueur</button>
</form>

<!-- Constructeur -->
<form id="fr_constructeur" class="form-section" action="ajouter.php" method="POST" style="display:none;">
    <input type="hidden" name="type" value="constructeur">
    <h2>Ajouter un Constructeur</h2>
    <label>Nom :</label><input type="text" name="nom" required><br>
    <button type="submit">Ajouter Constructeur</button>
</form>

<!-- Emprunt -->
<form id="fr_emprunt" class="form-section" action="ajouter.php" method="POST" style="display:none;">
    <input type="hidden" name="type" value="emprunt">
    <h2>Ajouter un Emprunt</h2>
    <label>ID Jeu :</label><input type="number" name="idJeu" required><br>
    <label>ID Joueur :</label><input type="number" name="idJoueur" required><br>
    <label>Date de prêt :</label><input type="date" name="datePret" required><br>
    <label>Date de retour :</label><input type="date" name="dateRetour"><br>
    <button type="submit">Ajouter Emprunt</button>
</form>

<!-- Plateforme -->
<form id="fr_plateforme" class="form-section" action="ajouter.php" method="POST" style="display:none;">
    <input type="hidden" name="type" value="plateforme">
    <h2>Ajouter une Plateforme</h2>
    <label>ID Jeu :</label><input type="number" name="idJeu" required><br>
    <label>ID Constructeur :</label><input type="number" name="idConstructeur" required><br>
    <label>Nom Plateforme :</label><input type="text" name="nom" required><br>
    <button type="submit">Ajouter Plateforme</button>
</form>

<script src="js/tabs.js" defer></script>
</body>

</html>
