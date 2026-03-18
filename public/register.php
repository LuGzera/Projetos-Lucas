<?php
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $password]);

    echo "Usuário cadastrado!";
}
?>

<form method="POST">
    <input name="name" placeholder="Nome" required>
    <input name="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Senha" required>
    <button type="submit">Cadastrar</button>
</form>