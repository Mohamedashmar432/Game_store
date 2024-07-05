<?php
session_start();
include 'user.class.php';
$data = user::getdata($_SESSION['user_id']);
$game = user::get_game($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php user::load('__navbar'); ?>
    <section class="container">
        <div class="dash">
            <h1>DASHBOARD</h1>
        </div>

        <div class="user-details">
            <div class="container">
                <img class="user-img" src="assets/user image.webp" alt="">
            </div>

            <div class="detail">
                <h2>Details</h2>
            </div>

            <ul class="details">
                <li>Name : <?php echo $data["fullname"]; ?></li>
                <li>User Name :<?php echo $data["username"]; ?> </li>
                <li>Email ID :<?php echo $data["email"]; ?> </li>
                <li>Date Of Birth : <?php echo $data["dob"]; ?></li>
                <li>User : Active</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="dash">
            <h1>OWNED GAMES</h1>
        </div>
        
<?php if ($game) {
    foreach ($game as $games) {
        
        echo "Image: <img src='" . $games['image'] . "' width='100'><br>";
        echo "Game Name: " . $games['item_name'] . "<br>";
        
    }
} else {
    echo "No purchased games found for this user.";
} ?>
    </section>


</body>

</html>