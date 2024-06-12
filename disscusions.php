<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <h1>Discussions</h1>
        <a href="post_discussion.php" class="button">Start a new discussion</a>
        <ul>
        <?php
        $sql = "SELECT discussions.id, discussions.title, users.username 
                FROM discussions 
                JOIN users ON discussions.user_id = users.id";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='view_discussion.php?id=".$row['id']."'>".$row['title']."</a> by <strong>".$row['username']."</strong></li>";
        }
        ?>
        </ul>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
