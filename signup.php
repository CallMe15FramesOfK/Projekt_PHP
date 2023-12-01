<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zarejestruj się!</title>
    <link rel="stylesheet" href="./styles/style_login.css">
</head>
<body>
    <div class="container">
        <form class="login-form">
            <input type="text" placeholder="Nazwa użytkownika" required>
            <input type="password" placeholder="Hasło" required>
            <input type="email" placeholder="Email" required>
            <button type="submit">Zarejestruj</button>
            <div class="signin-link">
                <p>Masz już konto? <a href="./log_in.php">Zaloguj się.</a></p>
                <p><a href="./index.php">Wróć na stronę główną.</a></p>
            </div>
        </form>
    </div>
</body>
</html>