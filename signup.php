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
        <form action="./register.php" method="post" class="login-form">
            <?php if (isset($_GET['error'])) {?>
                <style>
                    body{
                        background-color: #9ADE7B;
                    }
                </style>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <input type="text" id="username" name="username" placeholder="Nazwa użytkownika" required>
            <input type="password" id="password" name="password" placeholder="Hasło" required>
            <input type="email" id="email" name="email" placeholder="E-mail" required>
            <button type="submit">Zarejestruj</button>
            <div class="signin-link">
                <p>Masz już konto? <a href="./log_in.php">Zaloguj się.</a></p>
                <p><a href="./index.php">Wróć na stronę główną.</a></p>
            </div>
        </form>
        
    </div>
</body>
</html>