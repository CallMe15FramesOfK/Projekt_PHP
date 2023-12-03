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
        <form action="./login.php" method="post" class="login-form">
        <?php if (isset($_GET['error'])) {?>
                <style>
                    body{
                        background-color: #BE3144;
                    }
                </style>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
        <input type="text" id="username" name="username" placeholder="Nazwa użytkownika" required>
        <input type="password" id="password" name="password" placeholder="Hasło" required>
            <button type="submit">Zaloguj</button>
            <div class="signin-link">
                <p>Nie posiadasz jeszcze konta? <a href="./signup.php">Zarejestruj się.</a></p>
                <p><a href="./index.php">Wróć na stronę główną.</a></p>
            </div>
        </form>
    </div>
</body>
</html>