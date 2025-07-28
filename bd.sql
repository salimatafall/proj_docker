-- Création de la base de données
CREATE DATABASE IF NOT EXISTS crud_app;
USE crud_app;

-- Table des utilisateurs (ou des enregistrements à gérer)
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    age INT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de quelques exemples
INSERT INTO utilisateurs (nom, email, age) VALUES
('Samba Ndiaye', 'samba@example.com', 28),
('Awa Diop', 'awa@example.com', 22);
