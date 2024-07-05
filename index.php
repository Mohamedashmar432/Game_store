<?php
session_start();
include 'user.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <?php user::load('__navbar'); ?>
   
    <section id="home">
        <div id="bgc">
            <img src="assets/wallpaperflare.com_wallpaper.jpg" alt="background image">
        </div>
        <div class="tagline">
            <h1 class="h-primary center">Welcome to the world</h1>
            <h1 class="h-primary center">of</h1>
        </div>
        <div class="second_tagline">
            <h1 class="h-primary center">Unlock your gaming potetial</h1>
        </div>
    </section>

    <section id="about">
        <div class="h1-primary">
            <h1>WE ARE RIOT GAMES</h1>
        </div>
        <div class="defy">
            <h1>DEFY THE LIMITS</h1>
        </div>
        <div class="para">
            <p>Riot Games stands as a cornerstone in the gaming community, offering a multifaceted platform that caters to every facet of your gaming journey. As a premier gaming website, Riot Games provides an expansive array of services, allowing users to not only purchase games but also stay abreast of the latest news within the gaming sphere and indulge in mesmerizing gameplay content.</p>
            
            <p>Embark on your gaming adventures with ease as Riot Games intuitive interface guides you through a vast selection of titles spanning diverse genres and platforms. Dive deep into the heart of the gaming community with up-to-the-minute news, insightful analyses, and thought-provoking articles that keep you informed and engaged.</p>

            <p>Experience the thrill of gaming firsthand through Riot Games curated collection of gameplay footage, ranging from exhilarating Let's Plays to expertly crafted walkthroughs. Whether you're seeking inspiration for your next gaming conquest or simply looking to immerse yourself in the excitement of gaming, Riot Games promises to deliver an unparalleled experience.</p>

            <p>Join us at Riot Games and discover a world where gaming knows no bounds. With a commitment to excellence and a passion for gaming, Riot Games invites you to explore, connect, and indulge in the endless possibilities that await you.</p>
        </div>  
    </section>
    
    <section class="container">
        <div class="h2-primary">
            <h1>OUR MOST POPULAR GAMES</h1>
        </div>
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="assets/game images/assassin-creed.jpg" alt="assassin creed">

                <img id="slide-2" src="assets/game images/cyberpunk.jpg" alt="cyberpunk">

                <img id="slide-3" src="assets/game images/far-cry-6.jpg" alt="far cry 6">

                <img id="slide-4" src="assets/game images/forza-horizon.jpg" alt="forza horizon">

                <img id="slide-5" src="assets/game images/god-of-war.jpg" alt="god of war">

                <img id="slide-6" src="assets/game images/gta-v.jpg" alt="gta v">
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
                <a href="#slide-4"></a>
                <a href="#slide-5"></a>
                <a href="#slide-6"></a>
            </div>
        </div>
    </section>

    <section id="media">
        <div class="h3-primary">
            <h1>NEW RELEASE AND TRAILERS</h1>
        </div>
        <div class="videos">
            <div class="trailers">
                <iframe width="460" height="258.75" src="https://www.youtube.com/embed/QdBZY2fkU-0?si=q2qMZEfM1cncdYcC" title="YouTube video player" ?autoplay=1 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="trailers">
                <iframe width="460" height="258.75" src="https://www.youtube.com/embed/qLZenOn7WUo?si=JWV6ibcvryXLbhD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="trailers">
                <iframe width="460" height="258.75" src="https://www.youtube.com/embed/nq1M_Wc4FIc?si=SqbXdJAwjXEcbjFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="videos">
            <div class="trailers">
                <iframe width="460" height="258.75" src="https://www.youtube.com/embed/34FMSgdzzvI?si=nxhn-pdF9xm1Gbbh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="trailers">
                <iframe width="460" height="258.75" src="https://www.youtube.com/embed/IRNOoOYVn80?si=bosKwKyIsvcuDgh4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">our Team</a></li>
                </ul>
            </div>
    
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by <span class="designer">SAQIB AKHTAR</span></p>
        </div>
    </footer>

    
</body>
</html>