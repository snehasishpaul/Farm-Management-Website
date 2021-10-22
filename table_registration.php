<?php
    include("dbcon.php");
?>
<?php
    session_start();
    //echo $_SESSION["login"];

    // if (session_status() == PHP_SESSION_ACTIVE) {
    // echo 'Session is active';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css" />
  <title>registration table</title>
  <style>
      .nav-wrapper {
        background-color: #20702d;
      }

      table, th, td{
          align-items: center;
          justify-content: center;
          margin: 5px 20px;
          
          border: 1px solid #20702d;
      }
      table {
          max-width: auto;
      }
      .container-product {
          width: 100vh;
          margin: auto;
        
      }
      .btn-buy{
          background-color: #20702d;
          border-radius: 5px;
          text-decoration: none;
      }

      .a-buy {
          text-decoration: none;
          color: white;
      }

      .a-buy:hover {
          text-decoration: none;
          color: white;         
      }
      
  </style>
</head>
<body>
    
        <nav>
                <div class="nav-wrapper">
                    <a href="home.php" class="brand-logo center">Registration Data</a>
                </div>
                
                <script>
                    function testfunction(id) {
                        window.location.href="transaction.php?a=id";
                        window.location.replace("transaction.php?a=id");
                    }
                    
                </script>
        </nav>

    <div class="container-product">
        <aside class="aside-left">
            <?php
                $query="select * from registration";
                $result=$con->query($query);
                if(!$result) echo "Querying failed";
                
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Registration ID</th><th>Registration Username</th><th>Registered Email</th><th>Registered Password</th><th>Confirmed Password</th><th>Registered Mobile</th><th>Registered Address</th></tr>";
                    while($row = $result->fetch_assoc()) {
                        $a = $row["sno"];
                        echo "<tr><td>".$row["sno"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["pass"]."</td><td>".$row["cpass"]."</td><td>".$row["mobile"]."</td><td>".$row["address"]."</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "No Data";
                }
            ?>
        </aside>
    </div>
    <div class="btn-table" style="margin: auto; height: 10px; width: 30px;">
        <button style="background-color: #20702d;"><a href="admin_home.php" style="color: white;">Back</a></button>
    </div>
   

    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>