<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($nom && $email) {
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email) VALUES (?, ?)");
        $stmt->execute([$nom, $email]);
        header("Location: index.php");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>

<h1>Ajouter un utilisateur</h1>
<form method="post">
    Nom : <input type="text" name="nom"><br><br>
    Email : <input type="email" name="email"><br><br>
    <button type="submit">Ajouter</button>
</form>
<a href="index.php">← Retour</a>
