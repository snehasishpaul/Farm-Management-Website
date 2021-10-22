<?php
		if(isset($_POST['buy'])){
                        include("dbcon.php");

						if(!$con) {
                             die("Connection to this database failed due to".mysqli_connect_error());
                        } 

                        $buyername= ( $_POST['buyername']) ;
                        $productname= ( $_POST['productname']) ;
                        $quantity= ( $_POST['productquantity']) ;
                        $price= ( $_POST['productprice']) ;
                        $cardnumber= ( $_POST['card_number']) ;
                    
                                $insert="insert into transaction values('','$buyername','$productname','$quantity','$price','$cardnumber',current_timestamp())";

                                $find= mysqli_query($con,$insert);

                                if($find)
                            {
                                header("location:confirmation.php?msg=done");
                            }
                            else{
                                header("location:not_confirmation.php?msg=undone");
                            }

                    }
	?>