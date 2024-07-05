<nav id="navbar">
    <div id="logo">
        <img src="assets/riot games.jpg" alt="website logo">
    </div>
    <div>
        <ul class="allitems">
            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li class="items"><a href="index.php">Home</a></li>
                <li class="items"><a href="login.php">About</a></li>
                <li class="items"><a href="login.php">Media</a></li>
                <li class="items"><a href="login.php">Library</a></li> <?php } else { ?>
                <li class="items"><a href="index.php">Home</a></li>
                <li class="items"><a href="#">About</a></li>
                <li class="items"><a href="#">Media</a></li>
                <li class="items"><a href="library.php">Library</a></li> <?php } ?>
        </ul>
    </div>
    <div class="btn">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="dashboard.php"><?php echo $_SESSION['user']; ?></a>
            <a href="index.php?logout=<?php echo urlencode('logout'); ?>">Logout</a>
        <?php } else { ?>
            <a href="login.php">JOIN NOW</a>
        <?php } ?>
    </div><?php
    if (isset($_GET['logout']) && $_GET['logout'] === 'logout') {
    user::logout();
}
?>
</nav>