<?php
session_start();

// Usunięcie wszystkich zmiennych sesyjnych
session_unset();

// Zniszczenie sesji
session_destroy();

// Przekierowanie użytkownika na stronę logowania
header("location: login.php");
exit;
?>
