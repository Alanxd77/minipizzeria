<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i Rejestracja</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Logowanie i Rejestracja</h1>
    </header>

    <section>
        <h2>Zaloguj się</h2>
        <form action="login.php" method="POST">
            <label for="login_username">Nazwa użytkownika:</label>
            <input type="text" id="login_username" name="login_username" required>

            <label for="login_password">Hasło:</label>
            <input type="password" id="login_password" name="login_password" required>

            <button type="submit">Zaloguj</button>
        </form>
    </section>

    <section>
        <h2>Zarejestruj się</h2>
        <form action="register.php" method="POST">
            <label for="register_username">Nazwa użytkownika:</label>
            <input type="text" id="register_username" name="register_username" required>

            <label for="register_password">Hasło:</label>
            <input type="password" id="register_password" name="register_password" required>

            <button type="submit">Zarejestruj</button>
        </form>
    </section>
</body>

</html>
