<?php 

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$host = 'mysql:host=localhost;dbname=accounts';
$source = 'root';
$dbpass = '';

$pdo = new PDO($host,$source,$dbpass);

$stmt = $pdo->prepare("SELECT * FROM users WHERE  
        name = :username AND  password = :password");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    header("Location: index.php?error=Invalid username or password");
    exit();
}else{
    $_SESSION["username"] = $user["name"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["password"] = $user["password"];
    header("Location: home.php");
    exit();
}

?>