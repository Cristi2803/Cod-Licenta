<?php
include 'includes/db.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>About CyberTalK</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="about-section">
        <div class="about-content">
            <h1>About CyberTalK</h1>
            <p>Welcome to CyberTalK, the ultimate forum for security enthusiasts! Our platform is dedicated to fostering meaningful discussions, sharing knowledge, and connecting like-minded individuals passionate about technology. Whether you're a seasoned professional or just starting out, CyberTalK provides a space for everyone to learn, grow, and collaborate.</p>
            
            <div class="about-images">
                <img src="https://www.neit.edu/wp-content/uploads/2022/10/Cyber-Security-Icon-Concept-2-1-1024x632.jpeg" alt="Community">
                <img src="https://www.mckinsey.com/~/media/mckinsey/featured%20insights/mckinsey%20explainers/what%20is%20cybersecurity/what-is-cybersecurity-1370511057-hero-1536x864.jpg?cq=50&mw=767&cpy=Center" alt="Technology">
            </div>
            
            <h2>Our Mission</h2>
            <p>Our mission is to create a vibrant community where cybersecurity enthusiasts can exchange ideas, ask questions, and stay updated on the latest trends in the industry. We believe in the power of collective knowledge and strive to make CyberTalK a welcoming and informative space for all.</p>
            
            <h2>Join the Conversation</h2>
            <p>At CyberTalK, we value your participation. Join our forum today to start new discussions, share your expertise, and engage with others who share your passion for technology. Together, we can build a stronger security community.</p>
            
            <a href="register.php" class="button">Join Now</a>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
