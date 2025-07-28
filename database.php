<?php
$host = 'db'; // nom du service Docker pour MySQL
$db = 'crud_app';
$user = 'crud_salimata';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $salimata, $root);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?
