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
        <header>
            <h1>UniYU</h1>
        </header>
        <section class="login-form">
            <h2>Connexion</h2>
            <form action="process-login.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Se Connecter</button>
            </form>
        </section>
        <section>
        <div class="lien" <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous ici</a></p></div>
        </section>
    </div>

    <footer>
        <p>&copy; 2023 Forum de Discussion Professionnelle</p>
    </footer>
</body>
</html>
