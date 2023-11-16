<?php
$serveur = "127.0.0.1"; // Ou l'adresse IP si nécessaire
$utilisateur = "root"; // Nom d'utilisateur par défaut pour EasyPHP DevServer
$mot_de_passe = ""; // Laissez le mot de passe vide par défaut
$base_de_donnees = "messdb";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifiez la connexion
if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
?>


