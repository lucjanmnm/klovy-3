<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

// Wylogowanie użytkownika po kliknięciu przycisku "Wyloguj"
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witaj, admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .logout-form {
            display: inline-block;
        }
        .logout-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-message">
            Witaj, <?php echo $_SESSION["username"]; ?>!
        </div>
        <div class="logout-form">
            <form action="" method="post">
                <button type="submit" name="logout" class="logout-button">Wyloguj</button>
            </form>
        </div>
    </div>
</body>
</html>
