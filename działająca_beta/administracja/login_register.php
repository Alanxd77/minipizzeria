<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i Rejestracja</title>
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
