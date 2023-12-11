<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $validUsername = "user";
    $validPassword = password_hash("password123", PASSWORD_DEFAULT);
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    if ($enteredUsername === $validUsername && password_verify($enteredPassword, $validPassword))
    {
        header("Location: 17_1.php");
        exit();
    }
    else
    {
        header("Location: 17.php?error=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
    <head><title>Login</title></head>
    <body>
        <?php
        if (isset($_GET["error"]) && $_GET["error"] == 1)
        {
            echo "<p style='color: red;'>Incorrect username or password. Please try again.</p>";
        }
        ?>
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:<input type="text" name="username" required></label><br>
            <label for="password">Password:<input type="password" name="password" required></label><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
