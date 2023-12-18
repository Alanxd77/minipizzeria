<?php
// config.php
$mysqli = new mysqli("localhost", "root", "", "minipizzeria");

if ($mysqli->connect_error) {
    die('Błąd połączenia z bazą danych: ' . $mysqli->connect_error);
}
?>


