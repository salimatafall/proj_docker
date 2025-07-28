<?php
require 'database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID non fourni.";
    exit();
}

// Charger les données actuelles
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE id = ?");
$stmt->execute([$id]);
$utilisateur = $stmt->fetch();

if (!$utilisateur) {
    echo "Utilisateur introuvable.";
    exit();
}

// Modifier les données
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($nom && $email) {
        $stmt = $pdo->prepare("UPDATE utilisateurs SET nom = ?, email = ? WHERE id = ?");
        $stmt->execute([$nom, $email, $id]);
        header("Location: index.php");
    exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>

<h1>Modifier un utilisateur</h1>
<form method="post">
    Nom : <input type="text" name="nom" value="<?= htmlspecialchars($utilisateur['nom']) ?>"><br><br>
    Email : <input type="email" name="email" value="<?= htmlspecialchars($utilisateur['email']) ?>"><br><br>
    <button type="submit">Enregistrer</button>
</form>
<a href="index.php">← Retour</a>
