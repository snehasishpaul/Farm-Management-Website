<!DOCTYPE html>
<html lang="en">
<head>
	<title>login form</title>
	<style>
		* {
    padding: 0;
    margin: 0;
}
.head {
    text-align: center;
    color: #808080;
    text-shadow: 2px 2px 2px blue;
}
.menu {
    background-color: #20702d;
    display: block;
    text-align: center;
    width: 100%;
    height: auto;
    opacity: 0.8;
}
.menu ul {
    padding: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    color: white;
    list-style: none;
}
.menu ul li {
    width: 100px;
    margin: 15px;
    padding: 10px;
}
.menu ul li a {
    text-decoration: none;
    color: white;
}
.menu ul li :hover {
    display: block;
    width: 100px;
    height: auto;
    align-items: center;
    background: #074612;
    border-radius: 10%;
}
.menu ul ul {
    display: none;
}
.menu ul li:hover > ul {
    display: block;
    width: 150px;
    color: black;
    align-items: center;
    background-color: #20702d;
    border-radius: 10px;
    text-align: left;
    position: absolute;
}
    .footer {
    background-color: #20702d;
    clear: both;
    height: 25px;
    position: relative;
    margin-top: 25px;
    margin-bottom: 0;
    text-align: right;
    font-size: larger;
    color: white;
	}
	.jm{
		height: 20%;
		width: 50%;
		position: relative;
		background-size: cover;
		margin-left: 450px;

	}
	.hd{
		text-align: center;
		margin-top: 40px;
		margin-bottom: 30px;
	}
	.main{
		position: relative;
		margin-left: 300px;
		margin-top: 40px;
	}
	.fir{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.sec{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.thi{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.fou{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.fiv{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.six{
		height: 10px;
		width: 300px;
		border-radius: 10px;
		margin: 10px;
		padding: 10px;
		outline: none;
	}
	.reg{
		background: #20702d;
		color: white;
		border-radius: 10px;
		margin: 5px;
		padding: 5px;
		margin-left: 300px;
	}

	</style>
</head>
<body>
	    <div class="full" style="width: 1000px; margin: auto;">
            <h1 class="head">ONLINE FARMING SYSTEM</h1>
            <div class="menu">
                <ul>
                    <!-- <li><a href="home.php"> Home </a></li>
                    <li><a href="Vlog.php">Vlog</a></li> -->
                    <li style="text-align: center;">
                        <a href="#">Login</a>
                        <ul>
                            <!-- <li><a href="Login.php">Farmer</a></li> -->
                            <li><a href="Login.php">Buyer</a></li>
                            <li><a href="LoginAdmin.php">Admin</a></li>
                            <li><a href="login_farmer.php">Farmer</a></li>
                        </ul>
                    </li>
                    <li class="login-li" style="text-align: center;">
                        <a href="#">Register</a>
                        <ul>
                            <!-- <li><a href="Registration.php">Farmer</a></li> -->
                            <li><a href="Registration.php">Buyer</a></li>
                            <li><a href="registration_farmer.php">Farmer</a></li>
                            <!-- <li><a href="Registration.php">Admin</a></li> -->
                        </ul>
                    </li>
                    <!-- <li><a href="market.php">Digital market</a></li>
                
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li> -->
                </ul>
            </div>
        </div>
        <div class='container-vlog' style="margin: auto;">
            <div class="header-vlog">
                <h1 class="hd">Farmer Register Here :</h1>
            </div>
            <div class="jpg" style="margin: auto;">
            	<img src="images/registration.jpg" class="jm" alt="Registration image">
            </div>
            <div class="main">
            	<form action="registration_farmer.php" method="POST">
            		<b>NAME:</b> <input type="text" name="user" placeholder="User name" class="fir" required=""><br>
            		<b>ADDRESS: </b><textarea placeholder="Address here" class="thi" required="" name="addre"></textarea><br>
            		<b>PASSWORD:</b> <input type="PASSWORD" name="pass" placeholder="Password here" required="" class="fou"><br>            		
            		<b>MOBILE NUMBER:</b><input type="tel" name="mobile" placeholder="Mobile number" required="" class="six"><br>
            		<input type="submit" name="regi" value="Register" class="reg"><br>
                    <input type="reset" name="reset" value="Reset" class="reg">
            	</form>
            </div>
            <div class="footer vlog">Copyright &copy; 2021, ONLINE FARMING SYSTEM</div>
             <?php                
                if(isset($_POST['regi'])){
                        include("dbcon.php");

                        if(!$con) {
                             die("Connection to this database failed due to".mysqli_connect_error());
                        }   

                        $username= ( $_POST['user']) ;
                        $password= ( $_POST['pass']) ;
                        $mobile= ( $_POST['mobile']) ;
                        $adress= ( $_POST['addre']) ;

                                $insert="insert into farmer values('','$username','$adress','$password','$mobile')" ;

                                $ique= mysqli_query($con,$insert);

                                if($ique)
                            {
                                echo "<script> alert('Successfully Registered');</script>";
                            }
                            else{
                            echo "<script> alert('Registration Failed');</script>";
                        }

                    }
  
            ?>

</body>
</html>

