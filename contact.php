<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact CyberTalK</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="contact-section">
        <div class="contact-content">
            <h1>Contact CyberTalK</h1>
            <p>If you have any questions, suggestions, or need support, feel free to reach out to us. We're here to help!</p>
            <p>You can contact us via email at <strong>contact@cybertalk.com</strong> or through our social media channels:</p>
            <ul>
                <li>Facebook: <a href="https://www.facebook.com/cybertalk">CyberTalK</a></li>
                <li>Twitter: <a href="https://twitter.com/cybertalk">CyberTalK</a></li>
                <li>Instagram: <a href="https://www.instagram.com/cybertalk">CyberTalK_official</a></li>
            </ul>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
