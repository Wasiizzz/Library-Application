<?php
include("connection.php");
if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $sql = "INSERT INTO `login` ( `Name`, `Contact`, `Email`, `Password`) VALUES ( '$user', '$contact', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: userL.php");
        exit;
    } else {
        echo '<script>
        window.location.href = "userL.php";
        alert("Login failed. Invalid username, password, email, or contact info!!!!");
        </script>';
        exit;
    }
}     
?>
