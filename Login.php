<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <div class="full">
            <h1 class="head">ONLINE FARMING SYSTEM</h1>
            <div class="menu">
                <ul>
                    <li><a href="Index.html"> Home </a></li>
                    <li><a href="Vlog.html">Vlog</a></li>
                    <li>
                        <a href="#">Login</a>
                        <ul>
                            <li><a href="Login.php">Farmer</a></li>
                            <li><a href="Login.php">Buyer</a></li>
                            <li><a href="Login.php">Admin</a></li>
                        </ul>
                    </li>
                    <li class="login-li">
                        <a href="#">Register</a>
                        <ul>
                            <li><a href="Registration.php">Farmer</a></li>
                            <li><a href="Registration.php">Buyer</a></li>
                            <li><a href="Registration.php">Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="market.php">Digital market</a></li>
                    <li><a href="#">Hire</a></li>
                    <li><a href="About.html">About Us</a></li>
                </ul>
            </div>
        </div>
        <form class="box" action="" method="POST">
            <h1>Login</h1>
            <input type="text" name="usern" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="submit" name="sub" value="Login" />
        </form>
        <div class="footer">Copyright &copy; 2021, ONLINE FARMING SYSTEM</div>
    </body>
</html>

<?php
include("dbcon.php");
?>

<?php

        if (isset($_POST['sub'])) {
            $username= ( $_POST['usern']) ;
            $password= ( $_POST['pass']) ;


            $find= "select * from registration where username='$username'";

        //     $ique= mysqli_query($con,$find);

        //    $res=mysqli_num_rows($ique);
            $result = $con->query($find);
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if($password == $row['pass']){
                    $_SESSION['login'] = true;
                    header("Location: market.php");
                }
                else {
                    echo "<script> alert('Incorrect Password');</script>";
                }
            }
            else {
                echo "<script> alert('User Doesnt Exist');</script>";
            }

            // if ($res==true) {
            //     header("location: market.php");
            // }
            // else{
            //     echo "wrong password";
            // }
        }
?>
