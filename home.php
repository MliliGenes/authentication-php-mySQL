<?php 
session_start();
if (!($_SESSION['username'] || $_SESSION['email'] || $_SESSION['password'])){
    header("Location: index.php");
    exit();
}

?>


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
    <div class="container active">
        <div class="center">
            <h1>Hello <?= strtoupper($_SESSION['username']) ?></h1>
            <div class="data">
                <h2>
                    <?= $_SESSION["email"] ?>
                </h2>
                <h3>
                    <?= $_SESSION["password"] ?>
                </h3>
                <a href="logout.php">log out</a>
            </div>
        </div>
    </div>
</body>

</html>