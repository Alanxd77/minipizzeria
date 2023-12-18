<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST["register_username"]);
    $password = password_hash($_POST["register_password"], PASSWORD_DEFAULT);

    // Sprawdź, czy użytkownik o podanej nazwie już istnieje
    $checkUserQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $mysqli->query($checkUserQuery);

    if ($result->num_rows > 0) {
        echo "Użytkownik o podanej nazwie już istnieje.";
        exit();
    }

    // Dodaj użytkownika do bazy danych
    $insertUserQuery = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($mysqli->query($insertUserQuery) === TRUE) {
        header("Location: menu.php"); // Przekierowanie na stronę menu po rejestracji
        exit();
    } else {
        echo "Błąd podczas rejestracji: " . $mysqli->error;
    }

    $mysqli->close();
}
?>

