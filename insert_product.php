<?php
    session_start();
?>

<?php   
        $flag = false;
		if(isset($_POST['product_register'])){
                        include("dbcon.php");

						if(!$con) {
                             die("Connection to this database failed due to".mysqli_connect_error());
                        } 

                        $productname= ( $_POST['p_name']);
                        $productcategory= ( $_POST['p_category']);
                        $productprice= ( $_POST['p_price']);
                        
                    
                                $insert="insert into products values('','$productname','$productcategory','$productprice')" ;

                                $find= mysqli_query($con,$insert);

                                if($find)
                            {
                                $flag = true;
                            }
                            else{
                                $flag = false;
                            }
                    }
	?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>product form</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
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
        <div class="container" style="margin: 50px auto;">
            <h1>Add Product</h1>
            <?php
                if($flag == true) {
                    echo "<p class='submitMsg'>New Product has been Registered.</p>";
                }
            ?>

            <form action="insert_product.php" method="POST">
                <input
                    type="text"
                    name="p_name"
                    id="name"
                    placeholder="Enter product name"
                />
                <input
                    type="text"
                    name="p_category"
                    placeholder="enter product category"
                />
                <input
                    type="text"
                    name="p_price"
                    placeholder="enter product price ending with $"
                />        
                <button type="submit" name="product_register" class="btn">Insert</button>
                <button type="reset" class="btn">Reset</button>
            </form>
        </div>
        <script src="main.js"></script>

        <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `info`, `date`) VALUES ('1', 'testname', '24', 'male', 'test@gmail.com', '1234567890', 'values for project PHP', current_timestamp()); -->
    </body>

    
</html>
