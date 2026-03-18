<?php
session_start();
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["name"];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Login inválido!";
    }
}
?>

<form method="POST">
    <input name="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Senha" required>
    <button type="submit">Login</button>
</form>