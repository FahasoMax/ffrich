<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    // Si non, rediriger vers la page d'accueil
    header('Location: index.php');
    exit();
}

// Récupérer les données du formulaire
$author = $_SESSION['username'];
$content = $_POST['message'];

// Inclure le fichier de configuration de la base de données
include('config.php');

// Échapper les caractères spéciaux pour éviter les problèmes de sécurité (prévention des injections SQL)
$author = mysqli_real_escape_string($connexion, $author);
$content = mysqli_real_escape_string($connexion, $content);

// Requête d'insertion dans la base de données
$requete_insert = "INSERT INTO messages (author, content) VALUES ('$author', '$content')";

// Exécuter la requête d'insertion
$resultat_insert = mysqli_query($connexion, $requete_insert);

// Vérifier si l'insertion a réussi
if ($resultat_insert) {
    // Rediriger l'utilisateur vers la page du forum
    header('Location: forum.php');
    exit();
} else {
    // Gérer les erreurs d'insertion
    echo "Erreur lors de l'insertion dans la base de données : " . mysqli_error($connexion);
}
?>
