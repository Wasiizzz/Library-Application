<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Library</title>
</head>
<body>
    <div id="form">
        <h1>Library</h1>
        <form method="post" action="Signupback.php">
            <label>Username</label><br>
            <input type="text" name="user" id="user" required><br><br>
            <label>Email</label><br>
            <input type="text" name="email" id="email" required><br><br>
            <label>Password</label><br>
            <input type="password" name="pass" id="pass" required><br><br>
            <label>Contact</label><br>
            <input type="number" name="contact" id="contact" required><br><br>
            <input type="submit" id="btn" value="Sign Up" name="submit">
        </form>
    </div>
</body>
</html>
