<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bookF.php">
    <title>Library</title>
</head>

<body class="welcome-body">
    <div class="navbar">
        <ul id="nav-ul">
            <li id="nav-li"><a href="welcome.php">Home</a></li>
            <li id="nav-li" class="log-out"><a href="Signup.php">Log Out</a></li>
        </ul>
        <h1 id="txt">Welcome To The Library</h1>
    </div>
    <?php
        include("connection.php");

// Fetch book names from the database
        $sql = "SELECT book_name FROM books_add";
        $result = $conn->query($sql);

// Check if there are any results
        if ($result->num_rows > 0) {
    // Output the book names
            while ($row = $result->fetch_row()) {
            $book_name = $row[0];
    }
}       else {
        echo "No books found.";
}

// Close the database connection
$conn->close();
?>



    <div id="imgs_link">
        <div class="image">
            <a href="bookF.php">
                <p alt="THE 48 LAWS OF POWER">THE 48 LAWS OF POWER</p>
            </a>
        </div>
        <div class="image">
            <a href="bookF.php">
                <p alt="ART OF SEDUCTION">ART OF SEDUCTION</p>
            </a>
        </div>
        <div class="image">
            <a href="bookF.php">
                <p  alt="MASTERY">MASTERY</p>
            </a>
        </div>
        <div class="image">
            <a href="bookF.php">
                <p id="book_name" alt="THE 33 STRATEGIES OF WAR">THE 33 STRATEGIES OF WAR</p>
            </a>
        </div>
        <?php
        include("book_added.php");
        foreach ($books as $book) {
            echo "<p>{$book['book_name']}</p>";
            echo "<p>{$book['book_author']}</p>";
        }
        ?>
    </div>
</body>
</html>
