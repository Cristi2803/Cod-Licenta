<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$query = "";
if (isset($_GET['query'])) {
    $query = $_GET['query'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <h1>Search Results</h1>
        <ul>
        <?php
        if ($query != "") {
            $sql = "SELECT discussions.id, discussions.title, users.username 
                    FROM discussions 
                    JOIN users ON discussions.user_id = users.id 
                    WHERE discussions.title LIKE '%$query%' OR discussions.body LIKE '%$query%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><a href='view_discussion.php?id=".$row['id']."'>".$row['title']."</a> by <strong>".$row['username']."</strong></li>";
                }
            } else {
                echo "<li>No discussions found matching your query.</li>";
            }
        } else {
            echo "<li>Please enter a search query.</li>";
        }
        ?>
        </ul>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
