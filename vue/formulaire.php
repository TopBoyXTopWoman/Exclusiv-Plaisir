<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../styles/forms.css">
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $age = $_POST['age'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $role = $_POST['role'] ?? '';
    $orientation = $_POST['orientation'] ?? '';

    // Créer un tableau avec les données
    $data = [
        'nom' => $nom,
        'prenom' => $prenom,
        'age' => $age,
        'sexe' => $sexe,
        'role' => $role,
        'orientation' => $orientation,
    ];

    // Lire les données existantes dans le fichier JSON
    $file = 'data.json';
    if (file_exists($file)) {
        $jsonData = file_get_contents($file);
        $jsonArray = json_decode($jsonData, true);
    } else {
        $jsonArray = [];
    }

    // Ajouter les nouvelles données à la liste
    $jsonArray[] = $data;

    // Sauvegarder les données dans le fichier JSON
    file_put_contents($file, json_encode($jsonArray, JSON_PRETTY_PRINT));

    echo "<p class='success-message'>Les données ont été enregistrées avec succès.</p>";
}
?>

<form action="" method="POST">
    <!-- Partie 1: Informations personnelles -->
    <fieldset>
        <legend>Informations personnelles</legend>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="age">Âge:</label>
        <input type="number" id="age" name="age" required><br><br>
    </fieldset>

    <!-- Partie 2: Genre et Rôle -->
    <fieldset>
        <legend>Genre et Rôle</legend>
        <label>Sexe:</label>
        <input type="radio" id="homme" name="sexe" value="Homme" required>
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="sexe" value="Femme" required>
        <label for="femme">Femme</label><br><br>

        <label>Rôle:</label>
        <input type="radio" id="dominant" name="role" value="Dominant" required>
        <label for="dominant">Dominant</label>
        <input type="radio" id="domine" name="role" value="Dominé" required>
        <label for="domine">Dominé</label><br><br>
    </fieldset>

    <!-- Partie 3: Orientation sexuelle -->
    <fieldset>
        <legend>Orientation sexuelle</legend>
        <label for="orientation">Orientation sexuelle:</label>
        <select id="orientation" name="orientation" required>
            <option value="Hétérosexuel">Hétérosexuel</option>
            <option value="Homosexuel">Homosexuel</option>
            <option value="Bisexuel">Bisexuel</option>
            <option value="Autre">Autre</option>
        </select><br><br>
    </fieldset>

    <input type="submit" value="Soumettre">
</form>

</body>
</html>
