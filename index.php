<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>login page</title>
</head>

<body>
    <div class="error">
        <?php if (isset($_GET['error'])) { ?>
        <p><?= $_GET['error'] ?></p>
        <?php } ?>
    </div>
    <div class="container">
        <form class="center" action="login.php" method="post">
            <h1>Login</h1>
            <div class="info">
                <div class="email inputs">
                    <input type="text" name="username" required />
                    <span for="email">Username</span>
                    <i></i>
                </div>
                <div class="password inputs">
                    <input type="password" name="password" required />
                    <span>Password</span>
                    <i></i>
                </div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>