<!DOCTYPE html>
<html lang="en">
    <head>
        <title>index</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                font-style: italic;
                color: teal;
            }
            body {
                background-image: url(images/background.jpg);
                background-size: cover;
            }
            .slide {
                width: 400px;
                height: 200px;
                background-image: url(images/inx1.jpg);
                background-size: cover;
                margin: auto;
                box-shadow: 3px 3px 10px 10px green;
                animation: sample 7s infinite linear;
            }
            @keyframes sample {
                33% {
                    background: url(images/inx2.jpg);
                    background-size: cover;
                }
                75% {
                    background: url(images/inx3.jpg);
                    background-size: cover;
                }
            }
            .lbtn {
                padding: 10px;
                margin: 100px 250px;
                border-radius: 10px;
            }
            .lbtn:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }
            .rbtn {
                padding: 10px;
                margin: 100px 200px;
                border-radius: 10px;
                margin-left: 600px;
            }
            .rbtn:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }

            a:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }

            a {
                text-decoration: none;
            }

            .marq {
                width: 50%;
                margin: auto;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="marq">
                <marquee direction="left"> <h1>ONLINE FARMING SYSTEM</h1></marquee>
            </div>
            <div class="links">
                <!-- <button class="lbtn">Login</button> -->
                <!-- <button class="rbtn">Registation</button> -->
                <button class="lbtn">
                    <a class="btn-primary" href="index_login.php">Login</a>
                </button>
                <button class="rbtn">
                    <a class="btn-primary" href="index_registration.php"
                        >Registration</a
                    >
                </button>
            </div>
            <div class="slide"></div>
        </div>
    </body>
</html>
