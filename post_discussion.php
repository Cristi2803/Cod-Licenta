<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $sql = "INSERT INTO discussions (user_id, title, body) VALUES ('$user_id', '$title', '$body')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Discussion</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <h1>Start a New Discussion</h1>
        <form method="POST">
            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title"><br>
            <label for="body">Body:</label><br>
            <textarea name="body" id="body"></textarea><br>
            <input type="submit" value="Post">
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
