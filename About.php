<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About Us</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body style="background-image: none">
        <div class="container-about">
            <h1 class="head">ONLINE FARMING SYSTEM</h1>
            <div class="menu">
                <ul>
                    <li><a href="home.php"> Home </a></li>
                    <li><a href="Vlog.php">Vlog</a></li>
                    <!-- <li>
                        <a href="#">Login</a>
                        <ul>
                            <li><a href="Login.php">Farmer</a></li>
                            <li><a href="Login.php">Buyer</a></li>
                            <li><a href="LoginAdmin.php">Admin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Register</a>
                        <ul>
                            <li><a href="Registration.php">Farmer</a></li>
                            <li><a href="Registration.php">Buyer</a></li>
                            <li><a href="Registration.php">Admin</a></li>
                        </ul>
                    </li> -->
                    <li><a href="market.php">Digital market</a></li>

                    <li><a href="About.php">About Us</a></li>                                        <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <section>
            <div class="middle-section">
                <div class="left-bar">
                    <h2 class="contact-heading">Contact Us</h2>
                    <h4>Phone: 123456789</h4>
                    <h4>Phone: 987654321</h4>
                    <div class="social">
                        <h2 class="social-heading">Our Social Handles:</h2>
                        <div class="social-links">
                            <a
                                class="individual-link"
                                href="https://www.facebook.com/"
                                target="_blank"
                            >
                                <img
                                    src="images/facebook.png"
                                    alt="facebook"
                                    height="40px"
                                />
                            </a>
                            <a
                                class="individual-link"
                                href="https://www.instagram.com/"
                                target="_blank"
                            >
                                <img
                                    src="images/instagram.png"
                                    alt="instagram"
                                    height="40px"
                                />
                            </a>
                            <a
                                class="individual-link"
                                href="https://twitter.com/?lang=en"
                                target="_blank"
                            >
                                <img
                                    src="images/twitter.png"
                                    alt="twitter"
                                    height="40px"
                                />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="right-bar">
                    <h2 class="about-heading">About Us</h2>
                    <p class="about-content">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Veritatis sed molestiae rerum excepturi voluptas
                        est fuga, consectetur corporis suscipit earum, aut
                        nesciunt. Non atque magni animi tenetur tempora, itaque
                        quisquam? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quod enim repellat nam exercitationem.
                        Expedita quas aperiam odio? Nostrum dolores adipisci
                        deleniti, laudantium fugit, odio in vitae, dolore nemo
                        nesciunt quia.
                    </p>
                    <p class="about-content">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Veritatis sed molestiae rerum excepturi voluptas
                        est fuga, consectetur corporis suscipit earum, aut
                        nesciunt. Non atque magni animi tenetur tempora, itaque
                        quisquam
                    </p>
                </div>
            </div>
        </section>
        <div class="footer vlog">
            Copyright &copy; 2021, ONLINE FARMING SYSTEM
        </div>
    </body>
</html>
