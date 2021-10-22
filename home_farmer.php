<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "farming";

    $con = mysqli_connect($server,$user,$password,$db);
    
?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>online farming managment</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div class="full">
            <h1 class="head">ONLINE FARMING SYSTEM</h1>
            <div class="menu">
                <ul>
                    <li><a href="home_farmer.php"> Home </a></li>
                    <li><a href="vlog_farmer.php">Vlog</a></li>
                    <li><a href="insert_product.php">Product Add</a></li>
                
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
                    <li><a href="market_farmer.php">Digital market</a></li>
                    <li><a href="about_farmer.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <h6 style="text-align: center; font-size: xx-large;">
                <?php
                    $a = $_SESSION["login_farmer"];
                    //echo $a;
                    $find= "select f_username from farmer where f_id='$a'";
                    $result = $con->query($find);
                    $row = $result->fetch_assoc();
                    echo "Welcome ".$row["f_username"];
                ?>
            </h6>
        </div>

        

        <div class="footer">Copyright &copy; 2021, ONLINE FARMING SYSTEM.</div>
    </body>
</html>
