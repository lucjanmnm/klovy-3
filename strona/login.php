<?php
session_start();

if(isset($_SESSION["username"])) {
    header("location: welcome.php");
    exit;
}

include 'login_process.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form action="" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Zaloguj</button>
    </form>
    <p>Nie masz jeszcze konta? <a href="register.php">Zarejestruj się tutaj</a></p>
</body>
</html>
