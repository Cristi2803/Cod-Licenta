<header>
    <div class="logo">
        <h1>CyberTalK</h1>
    </div>
    <nav>
        <a href="index.php">HOME</a>
        <a href="disscusions.php">DISCUSSIONS</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a class="logout" href="logout.php">Logout</a>
        <?php else: ?>
            <a class="login" href="login.php">Login</a>
            <a class="register" href="register.php">Register</a>
        <?php endif; ?>
        <form action="search.php" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Search discussions...">
            <button type="submit">Search</button>
        </form>
    </nav>
</header>
