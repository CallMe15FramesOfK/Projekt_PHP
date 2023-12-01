<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się!</title>
    <link rel="stylesheet" href="./styles/style_login.css">
</head>
<body>
    <div class="container">
        <form class="login-form">
            <input type="text" placeholder="Nazwa użytkownika" required>
            <input type="password" placeholder="Hasło" required>
            <button type="submit">Zaloguj</button>
            <div class="signin-link">
                <p>Nie posiadasz jeszcze konta? <a href="./signup.php">Zarejestruj się.</a></p>
                <p><a href="./index.php">Wróć na stronę główną.</a></p>
            </div>
        </form>
    </div>
</body>
</html>