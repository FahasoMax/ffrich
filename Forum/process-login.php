<?php
session_start();

// Inclure le fichier de configuration de la base de données
include('config.php');

// Récupérer les données du formulaire
$nom_utilisateur = mysqli_real_escape_string($connexion, $_POST['username']);
$mot_de_passe = mysqli_real_escape_string($connexion, $_POST['password']);

// Requête de sélection de l'utilisateur
$requete_select = "SELECT * FROM users WHERE username = '$nom_utilisateur'";
$resultat_select = mysqli_query($connexion, $requete_select);

// Vérifier si l'utilisateur existe
if ($resultat_select) {
    if ($utilisateur = mysqli_fetch_assoc($resultat_select)) {
        // Vérifier le mot de passe
        if ($mot_de_passe == $utilisateur['password']) {
            // Mot de passe correct, créer une session
            $_SESSION['username'] = $nom_utilisateur;

            // Rediriger l'utilisateur vers la page du forum
            header('Location: forum.php');
            exit();
        } else {
            // Mot de passe incorrect, rediriger vers la page de connexion avec un message d'erreur
            echo "Mot de passe incorrect. Nom d'utilisateur: $nom_utilisateur, Mot de passe: $mot_de_passe";
           header('Location: index.php?erreur=2');
            exit();
        }
    } else {
        // Aucun utilisateur trouvé avec ce nom d'utilisateur
        echo "Aucun utilisateur trouvé avec le nom d'utilisateur: $nom_utilisateur";
      header('Location: index.php?erreur=1');
        exit();
    }
} else {
    // Erreur lors de l'exécution de la requête
    echo "Erreur de requête : " . mysqli_error($connexion);
    exit();
}
?>
