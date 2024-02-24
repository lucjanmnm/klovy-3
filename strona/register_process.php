<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Połączenie z bazą danych
    $conn = new mysqli("localhost", "root", "", "php_db");

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    // Pobranie danych z formularza
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Zabezpieczenie przed atakami SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Zapytanie do bazy danych
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Użytkownik został pomyślnie zarejestrowany
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    } else {
        // Błąd podczas rejestracji
        echo "Błąd podczas rejestracji: " . $conn->error;
    }

    // Zamknięcie połączenia
    $conn->close();
}
?>
