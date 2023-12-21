<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM orders WHERE user_id = '$user_id'";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Zamówień</title>
    <style>
        /* Resetowanie stylów */
body, h1, h2, p, ul, li, table {
    margin: 0;
    padding: 0;
}

/* Podstawowe style strony */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f8f8;
    color: #333;
}

header {
    background-color: #ff6347;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

h1 {
    font-size: 3em;
}

section {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h2 {
    color: #ff6347;
    font-size: 2em;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #ff6347;
    color: #fff;
}

/* Formularz logowania */
#login {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
    color: #333;
}

input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #ff6347;
    color: #fff;
    padding: 12px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #d14029;
}

/* Stopka */
footer {
    text-align: center;
    padding: 1em 0;
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
</head>

<body>
    <header>
        <?php
        echo '<span>ID: ' . $_SESSION['user_id'] . '</span>';
        echo '<span>Nazwa użytkownika: ' . $_SESSION['username'] . '</span>';
        echo '<a href="logout.php" class="account-link">Wyloguj się</a>';
        echo '<a href="order_history.php" class="account-link">Historia zamówień</a>';
        ?>
        <h1>Historia Zamówień</h1>
        <a href="menu.php" class="menu-link">Powrót do Menu</a>
    </header>

    <section>
        <h2>Twoja Historia Zamówień</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Zamówienia</th>
                    <th>Imię</th>
                    <th>Adres</th>
                    <th>Pizza</th>
                    <th>Data Zamówienia</th>
                    <th>Ocena</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['order_id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['address']}</td>";
                        echo "<td>{$row['pizza']}</td>";
                        echo "<td>{$row['order_date']}</td>";
                        echo "<td>";

                        echo "<form action='submit_rating.php' method='post'>";
                        echo "<input type='hidden' name='order_id' value='{$row['order_id']}'>";
                        echo "<select name='rating'>";
                        for ($i = 1; $i <= 5; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        echo "</select>";
                        echo "<input type='submit' value='Oceń'>";
                        echo "</form>";

                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Brak zamówień.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>

<?php
$mysqli->close();
?>
