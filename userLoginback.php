<?php
include("connection.php");
if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "SELECT Name FROM `login` WHERE Name='$user' AND Password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        header("Location: welcome.php");
        exit;
    } else {
        echo '<script>
        window.location.href = "LoginP.php";
        alert("Login failed. Invalid username, password, email, or contact info!!!!");
        </script>';
        header("Location: userL.php");
    }
}
?>
