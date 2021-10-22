<?php
	include("dbcon.php");
?>

<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TRANSACTION PAGE</title>
	<style>
		*{
			marks: 0;
			padding: 0;
		}
		body{
			background: white;
		}
		h1{
			text-align: center;
			color: green;
			font-style: italic;
		}
		div{
			background: beige ;
			padding: 20px;
			left: 50px;
			width: 500px;
			height: 300px;
			margin-left: 300px;
			margin-top: 150px;
			/* box-shadow: 5px 5px 5px cyan; */
		}
		.a{
			padding: 10px;
			margin: 10px;
			border-radius: 30px;
			outline: none;
			transition: width 2s ease;
		}
			
		.b{
			padding: 10px;
			margin: 10px;
			border-radius: 30px;
			outline: none;
			transition: width 2s ease;
		}
	    .c{
	    	padding: 10px;
	    	margin: 10px;
			border-radius: 30px;
			outline: none;
			transition: width 2s ease;
	    }
	    .d{
	    	padding: 10px;
	    	margin: 10px;
			border-radius: 30px;
			outline: none;
			margin-left: 170px;
	    }
	    .a:focus{
	    	width: 200px;
	    	background: orange;
	    }
	    .b:focus{
	    	width: 200px;
	    	background: orange;
	    }
	    .c:focus{
	    	width: 200px;
	    	background: green;
	    }




	</style>
</head>
<body>
	<h1>TRANSACTION DETAILS</h1>
	<div>
		
		<form action="insert_code_farmer.php" method="POST">
			BUYER NAME : <input type="text" name="buyername" class="a" value="<?php
                    $a = $_SESSION["login_farmer"];
                    //echo $a;
                    $find= "select f_username from farmer where f_id='$a'";
                    $result = $con->query($find);
                    $row = $result->fetch_assoc();
                    echo $row["f_username"];
					
                ?>">
				<br>
			PRODUCT NAME : <input type="text" name="productname" placeholder="product name" class="a" value="<?php  
				$a = $_GET["a"];
				$query="select p_name from products where p_id=$a";
                $result=$con->query($query);
				$row = $result->fetch_assoc();
				echo $row["p_name"];
			?>">
			<br>
			PRODUCT QUANTITY : <input type="number" name="productquantity" placeholder="product quantity" class="b"><br>
			PRODUCT PRICE : <input type="text" name="productprice" placeholder="product quantity" class="b" value="<?php  
				$a = $_GET["a"];				
				$query="select p_price from products where p_id=$a";
                $result=$con->query($query);
				$row = $result->fetch_assoc();
				echo $row["p_price"];
			?>">
			<br>
			CARD NUMBER : <input type="text" name="card_number" placeholder="card number" class="c"><br>
			<input type="submit" name="buy" value="buy" class="d">
		</form>
	</div>
	
</body>
</html>