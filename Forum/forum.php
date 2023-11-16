<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    // Si non, rediriger vers la page d'accueil
    header('Location: index.php');
    exit();
}

// Inclure le fichier de configuration de la base de données
include('config.php');

// Récupérer les messages depuis la base de données
$requete = "SELECT * FROM messages ORDER BY post_date DESC";
$resultat = mysqli_query($connexion, $requete);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Style2.css">
    <title>Page d'Accueil</title>
</head>
<body>
    <div class="container">
        <h2>Bienvenue, <?php echo $_SESSION['username']; ?>!</h2>
        
        <!-- Formulaire pour envoyer un message -->
        <form action="process-message.php" method="post">
            <label for="message">Votre Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Envoyer le Message</button>
        </form>

        <!-- Afficher les messages existants -->
        <section class="messages">
            <?php
            // Afficher les messages
            while ($row = mysqli_fetch_assoc($resultat)) {
                echo '<article>';
                echo '<p><strong>' . htmlspecialchars($row['author']) . '</strong></p>';
                echo '<p>' . htmlspecialchars($row['content']) . '</p>';
                echo '<p>' . htmlspecialchars($row['post_date']) . '</p>';
                echo '</article>';
            }
            ?>
        </section>
    </div>
</body>
</html>
