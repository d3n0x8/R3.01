-- Active: 1727245053776@@127.0.0.1@3306@lacosina
CREATE TABLE RECETTES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    description TEXT,
    auteur VARCHAR(100),
    date_creation DATETIME
);

CREATE TABLE FORMULAIRE(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    auteur VARCHAR(100),
    description TEXT,
    date_creation DATETIME
)