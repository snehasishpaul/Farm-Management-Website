<!DOCTYPE html>
<html lang="en">
    <head>
        <title>online farming managment</title>

        <!-- <link rel="stylesheet" href="css/materialize.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" /> -->
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
                margin: 200px 230px;
                border-radius: 10px;
            }
            .lbtn:hover {
                background-color: #20702d;
                transform: scale(1.5);
                color: white;
            }            
            .mbtn {
                padding: 10px;
                margin: 200px 150px;
                border-radius: 10px;
                /* margin-left: 600px; */
            }
            .mbtn:hover {
                background-color: #20702d;
                transform: scale(1.5);
                color: white;
            }
            .rbtn {
                padding: 10px;
                margin: 200px 150px;
                border-radius: 10px;
                /* margin-left: 600px; */
            }
            .rbtn:hover {
                background-color: #20702d;
                transform: scale(1.5);
                color: white;
            }

            a:hover {
                background-color: #20702d;
                transform: scale(1.5);
                color: white;
            }

            a {
                border: none;
                text-decoration: none;
            }

            body {
                background-image: url(images/background.jpg);
                background-size: cover;
            }

            /* .inline {
                display: inline-block;
            } */
            
            .nav-wrapper {
                background-color: #20702d;
                opacity: .8;
                width: 100%;
                height: 70px;
            }

            .nav-wrapper > a{
                font-size: 50px;
                margin: 550px;
                color: white;
            }

            
        </style>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="" class="brand-logo center">Farming System</a>
            </div>
        </nav>

        
            <div class="links">
                <!-- <button class="lbtn">Login</button> -->
                <!-- <button class="rbtn">Registation</button> -->
                <button class="lbtn">
                    <a class="btn-primary" href="Login.php">Buyer Login</a>
                </button>
                <button class="mbtn">
                    <a class="btn-primary" href="login_farmer.php">Farmer Login</a>
                </button>
                <button class="rbtn">
                    <a class="btn-primary" href="LoginAdmin.php"
                        >Admin Login</a
                    >
                </button>
            </div>

        

        <!-- <div class="footer">Copyright &copy; 2021, ONLINE FARMING SYSTEM.</div> -->
    </body>
</html>
