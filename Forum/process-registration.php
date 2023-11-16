<?php
// Inclure le fichier de configuration de la base de données
include('config.php');

// Récupérer les données du formulaire
$nom_utilisateur = $_POST['username'];
$mot_de_passe = $_POST['password'];
$email = $_POST['email'];

// Échapper les caractères spéciaux pour éviter les problèmes de sécurité (prévention des injections SQL)
$nom_utilisateur = mysqli_real_escape_string($connexion, $nom_utilisateur);
$mot_de_passe = mysqli_real_escape_string($connexion, $mot_de_passe);
$email = mysqli_real_escape_string($connexion, $email);

// Hacher le mot de passe (utilisez une méthode de hachage sécurisée comme password_hash)
$mot_de_passe_hache = $mot_de_passe;

// Requête d'insertion dans la table des utilisateurs
$requete_insert = "INSERT INTO users (username, password, email) VALUES ('$nom_utilisateur', '$mot_de_passe_hache', '$email')";

// Exécuter la requête d'insertion
$resultat_insert = mysqli_query($connexion, $requete_insert);

// Vérifier si l'insertion a réussi
if ($resultat_insert) {
// Redirection vers index.php
header('Location: redirection.php');
exit();  
    // Rediriger l'utilisateur vers la page de connexion
} else {
    // Gérer les erreurs d'insertion
    echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
}
?>
