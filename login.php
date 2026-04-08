<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // LOGIN SEDERHANA
    if ($username == "admin" && $password == "123") {
        $_SESSION["login"] = true;
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - SIAKAD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card" style="max-width:400px; margin:auto; margin-top:100px;">

        <h2 style="text-align:center;">Login SIAKAD</h2>
        <p style="text-align:center;">Politeknik Negeri Jember</p>

        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>

            <button type="submit">Login</button>
        </form>

    </div>
</div>

</body>
</html>