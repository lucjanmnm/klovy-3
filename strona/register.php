<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form action="register_process.php" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Zarejestruj</button>
    </form>
    <p>Posiadasz już konto? <a href="login.php">Zaloguj się tutaj</a></p>
</body>
</html>
