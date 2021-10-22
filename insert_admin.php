<?php
    session_start();
?>

<?php   
        $flag = false;
		if(isset($_POST['admin_register'])){
                        include("dbcon.php");

						if(!$con) {
                             die("Connection to this database failed due to".mysqli_connect_error());
                        } 

                        $adminname= ( $_POST['admin_name']) ;
                        $adminpass= ( $_POST['admin_pass']) ;
                        
                    
                                $insert="insert into admin values('','$adminname','$adminpass')" ;

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
        <title>admin form</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="menu">
                <ul>
                    <li><a href="admin_home.php"> Home </a></li>
                    <li><a href="insert_admin.php">Add Another Admin</a></li>
                    <li><a href="Vlog_admin.php">Vlog</a></li>
                
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
                    <li><a href="table_admin.php">Admins</a></li>
                    <li><a href="table_products.php">Products</a></li>
                    <li><a href="table_registration.php">Registrations</a></li>
                    <li><a href="table_transaction.php">Transactions</a></li>
                    <li><a href="About_admin.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        <div class="container" style="margin: 50px auto;">
            <h1>Admin Registration</h1>
            <?php
                if($flag == true) {
                    echo "<p class='submitMsg'>New Admin has been Registered.</p>";
                }
            ?>

            <form action="insert_admin.php" method="POST">
                <input
                    type="text"
                    name="admin_name"
                    id="name"
                    placeholder="Enter your name" required
                />
                <input
                    type="password"
                    name="admin_pass"
                    placeholder="Enter your password"
                    required
                />        
                <button type="submit" name="admin_register" class="btn">Register</button>
                <button type="reset" class="btn">Reset</button>
            </form>
        </div>
        <script src="main.js"></script>

        <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `info`, `date`) VALUES ('1', 'testname', '24', 'male', 'test@gmail.com', '1234567890', 'values for project PHP', current_timestamp()); -->
    </body>

    
</html>
