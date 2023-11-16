<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Style2.css">
    <title>Forum - Inscription</title>
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        <form action="process-registration.php" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
