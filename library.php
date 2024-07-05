<?php  
session_start();
include 'user.class.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="library.css" rel="stylesheet">
</head>
<body>
<?php user::load('__navbar'); ?>
    <div class="container py-5">
        <h1 class="text-center">GAMES</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <div class="card">
                    <img src="assets/game images/cyberpunk.jpg" class="card-img-top" alt="cyberpunk">
                    <div class="card-body">
                        <h5 class="card-title">CYBERPUNK 2077</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2700</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('CYBERPUNK 2077', 2700, 10, 'cyberpunk')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <img src="assets/game images/assassin-creed.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ASSASSINS CREED</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1400</h4> </li>
                            <li>Discount: 19%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('ASSASSINS CREED', 1400, 19, 'assassin-creed')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/far-cry-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FAR CRY 6</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1800</h4> </li>
                            <li>Discount: 23%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('FAR CRY 6', 1800, 23, 'far-cry-6')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/forza-horizon.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FORZA HORIZON</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2900</h4> </li>
                            <li>Discount: 12%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('FORZA HORIZON', 2900, 12, 'forza-horizon')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/god-of-war.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">GOD OF WAR</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2300</h4> </li>
                            <li>Discount: 15%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('GOD OF WAR', 2300, 15, 'god-of-war')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/gta-v.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">GTA V</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1900</h4> </li>
                            <li>Discount: 5%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('GTA V', 1900, 5, 'gta-v')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <img src="assets/game images/pubg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PUBG</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹999</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('PUBG', 999, 10, 'pubg')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/alan-wake.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ALAN WAKE 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹3400</h4> </li>
                            <li>Discount: 14%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('ALAN WAKE', 3400, 14, 'alan-wake')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/avatar.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AVATAR</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹3700</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('AVATAR', 3700, 5, 'avatar')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/call-of-duty.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CALL OF DUTY</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1499</h4> </li>
                            <li>Discount: 12%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('CALL OF DUTY', 1499, 12, 'call-of-duty')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/death-stranding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">DEATH STRANDING</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1700</h4> </li>
                            <li>Discount: 19%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('DEATH STRANDING', 1700, 19, 'death-stranding')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/elden-rings.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ELDEN RINGS</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1800</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('ELDEN RINGS', 1800, 10, 'elden-rings')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/fifa-18.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FIFA 18</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2500</h4> </li>
                            <li>Discount: 30%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('FIFA 18', 2500, 30, 'fifa-18')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/fortnite.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FORTNITE</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: FREE</h4> </li>
                            <li>Discount: 100%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('FORTNITE', 1500, 100, 'fortnite')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/genshin-impact.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">GENSHIN IMPACT</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: FREE</h4> </li>
                            <li>Discount: 100%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('GENSHIN IMPACT', 1900, 100, 'genshin-impact')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/hogwarts-legacy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HOGWARTS LEGACY</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹3000</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('HOGWARTS LEGACY', 3000, 10, 'hogwarts-legacy')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/last-of-us.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LAST OF US</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2900</h4> </li>
                            <li>Discount: 10%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('LAST OF US', 2900, 10, 'last-of-us')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/minecraft.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MINECRAFT</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹3500</h4> </li>
                            <li>Discount: 50%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('MINECRAFT', 3500, 50, 'minecraft')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/rdr-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RED DEAD REDEMPTION 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2200</h4> </li>
                            <li>Discount: 15%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('READ DEAD REDEMPTION 2', 2200, 15, 'rdr2')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/skull-and-bones.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SKULL AND BONES</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹3200</h4> </li>
                            <li>Discount: 18%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('SKULL AND BONES', 3200, 18, 'skull-and-bones')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/subnautica.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SUBNAUTICA BELOW ZERO</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2599</h4> </li>
                            <li>Discount: 12%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('SUBNAUTICA BELOW ZERO', 2599, 12, 'subnautica')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/zelda.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">THE LEGEND OF ZELDA</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹2800</h4> </li>
                            <li>Discount: 25%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('THE LEGEND OF ZELDA', 2800, 25, 'zelda')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/witcher-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WITCHER 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1200</h4> </li>
                            <li>Discount: 29%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('WITCHER 2', 1200, 29, 'witcher-2')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/game images/resident-evil-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RESIDENT EVIL 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <ul class="price">
                            <li><h4>Price: ₹1500</h4> </li>
                            <li>Discount: 13%</li>
                        </ul>
                        <!-- Add button or link to trigger redirection -->
                        <button onclick="redirectToCheckout('RESIDENT EVIL 2', 1500, 13, 'resident-evil-2')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function redirectToCheckout(itemName, price, discount, itemId) {
            // Construct URL with parameters
            let url = `checkout.php?itemName=${(itemName)}&price=${price}&discount=${discount}&itemId=${(itemId)}`;
            window.location.href = url;
        }
    </script>
</body>

</html>