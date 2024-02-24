<?php
// Sprawdzenie, czy sesja jest już aktywna
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Połączenie z bazą danych
    $conn = new mysqli("localhost", "root", "", "php_db");

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    // Pobranie danych z formularza
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Zabezpieczenie przed atakami SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Zapytanie do bazy danych
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        // Użytkownik został pomyślnie zalogowany
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    } else {
        // Błędne dane logowania
        echo "Błędna nazwa użytkownika lub hasło.";
    }

    // Zamknięcie połączenia
    $conn->close();
}
?>
