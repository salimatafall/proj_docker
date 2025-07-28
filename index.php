<?php
require 'database.php';

$stmt = $pdo->query('SELECT * FROM utilisateurs');

echo "<h1>Liste des utilisateurs</h1>";
echo "<a href='ajouter.php'>Ajouter un utilisateur</a>";
echo "<ul>";
while ($row = $stmt->fetch()) {
    echo "<li>" . htmlspecialchars($row['nom']) . " (" . htmlspecialchars($row['email']) . ") - <a href='modifier.php?id=" . $row['id'] . "'>Modifier</a> | <a href='supprimer.php?id=" . $row['id'] . "'>Supprimer</a></li>";
}
echo "</ul>";
?>
