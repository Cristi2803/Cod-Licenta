<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$discussion_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $body = $_POST['body'];

        $sql = "INSERT INTO comments (discussion_id, user_id, body) VALUES ('$discussion_id', '$user_id', '$body')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: view_discussion.php?id=$discussion_id");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $login_required_message = "You must be logged in to comment.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Discussion</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <?php
        $sql = "SELECT discussions.title, discussions.body, users.username 
                FROM discussions 
                JOIN users ON discussions.user_id = users.id 
                WHERE discussions.id='$discussion_id'";
        $result = $conn->query($sql);
        $discussion = $result->fetch_assoc();
        ?>

        <h1><?php echo $discussion['title']; ?></h1>
        <p><?php echo $discussion['body']; ?></p>
        <p>Posted by: <strong><?php echo $discussion['username']; ?></strong></p>

        <h2>Comments</h2>
        <ul>
        <?php
        $sql = "SELECT comments.body, users.username 
                FROM comments 
                JOIN users ON comments.user_id = users.id 
                WHERE comments.discussion_id='$discussion_id'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<li class='comment'>".$row['body']." - <strong>".$row['username']."</strong></li>";
        }
        ?>
        </ul>

        <?php if (isset($_SESSION['user_id'])): ?>
        <form method="POST">
            <label for="body">Add a comment:</label>
            <textarea name="body" id="body"></textarea><br>
            <input type="submit" value="Comment">
        </form>
        <?php else: ?>
        <p>You must be <a href="login.php">logged in</a> to comment.</p>
        <?php endif; ?>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
