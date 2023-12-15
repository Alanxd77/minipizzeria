<?php
// summary.php
session_start();
include 'config.php';

if (isset($_SESSION['name']) && isset($_SESSION['address']) && isset($_SESSION['pizza']) && isset($_SESSION['createAccount'])) {
    $name = $_SESSION['name'];
    $address = $_SESSION['address'];
    $pizza = $_SESSION['pizza'];
    $createAccount = $_SESSION['createAccount'];

    // Dodaj zmienną $rating do sesji tylko w przypadku żądania POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rating = $_POST['rating'];
        $_SESSION['rating'] = $rating;

        // Dodaj zamówienie do bazy danych
        $query = "INSERT INTO orders (name, address, pizza, rating, create_account) VALUES ('$name', '$address', '$pizza', '$rating', '$createAccount')";

        if ($mysqli->query($query) === TRUE) {
            // Pomyślnie dodano zamówienie do bazy danych
        } else {
            echo "Błąd podczas dodawania zamówienia do bazy danych: " . $mysqli->error;
            exit();
        }
    } else {
        // Domyślna wartość oceny
        $rating = (isset($_SESSION['rating'])) ? $_SESSION['rating'] : 3;
    }
} else {
    echo "Nieprawidłowe żądanie.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Zamówienia</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Podsumowanie Zamówienia</h1>
    </header>

    <section>
        <h2>Podsumowanie zamówienia:</h2>
        <p>Imię: <?php echo $name; ?></p>
        <p>Adres: <?php echo $address; ?></p>
        <p>Wybrana pizza: <?php echo $pizza; ?></p>
        <p>Ocena pizzy: <?php echo $rating; ?> gwiazdek</p>
        <p>Stworzyć konto? <?php echo ($createAccount ? 'Tak' : 'Nie'); ?></p>
    </section>

    <!-- Formularz do oceny pizzy -->
    <form action="summary.php" method="POST">
        <label for="rating">Oceń pizzę (1-5 gwiazdek):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" value="<?php echo $rating; ?>" required>
        <button type="submit">Zatwierdź ocenę</button>
    </form>
</body>

</html>

