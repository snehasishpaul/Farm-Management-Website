<?php
    session_start();

    include('dbcon.php');
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
  <title>Document</title>
  <style>
   
    
  </style>
</head>
<body>
    
 

    <div class="container">

         <!-- /main row -->
    <div class="row carousel-row py-3">
        <div class="col-md-12">
          <h2 class="h2-responsive shadow py-3">Featured <b>Products</b></h2>
          
          <!-- Wrapper for carousel items -->
          
          <!-- Carousel controls -->
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        </div>
      </div>
      <!-- /main store row -->



        <div class="col-md-12 store-items-col">
            <h2 class="store-items-heading h2-responsive shadow py-2">Just <b>In</b></h2>
           <!-- wrapper -->
      
                <div class="store-items">
                  <div class="row store-row-2 py-3">

                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/beet.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Beetroot</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                              <a href="#" class="btn btn-primary">Buy now</a>
                          </div>						
                      </div>                      
          </div>
          <!-- /card 1 -->

              <div class="col-sm-3">
                <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                        <img src="images/broccoli.png" class="img-responsive img-fluid" alt="">									
                    </div>
                    <div class="thumb-content">
                        <h4 class="h4-responsive">Broccoli</h4>									
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                        <a href="#" class="btn btn-primary">Buy now</a>
                    </div>						
                </div>                     
    </div>
    <!-- /card 2 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/cabbage_PNG8815.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Cabbage</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
              <a href="#" class="btn btn-primary">Buy now</a>
          </div>						
      </div>              
    </div>
    <!-- /card3 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/cabbage_PNG8823.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Cauliflower</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
              <a href="#" class="btn btn-primary">Buy now</a>
          </div>						
      </div>            
    </div>
    <!-- /card 4-->
                  </div>
                  <!-- /store-row-2 -->

                  <!-- Store 3 -->
                  <div class="row store-row-3 py-3">

                    <div class="col-sm-3">
                      <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                              <img src="images/carrot_PNG4988.png" class="img-responsive img-fluid" alt="">									
                          </div>
                          <div class="thumb-content">
                              <h4 class="h4-responsive">Carrot</h4>									
                              <div class="star-rating">
                                  <ul class="list-inline">
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                              </div>
                              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                              <a href="#" class="btn btn-primary">Buy now</a>
                          </div>						
                      </div>                      
          </div>
          <!-- /card 1 -->

              <div class="col-sm-3">
                <div class="thumb-wrapper">
                    <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                        <img src="images/corn_PNG5286.png" class="img-responsive img-fluid" alt="">									
                    </div>
                    <div class="thumb-content">
                        <h4 class="h4-responsive">Corn</h4>									
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                        <a href="#" class="btn btn-primary">Buy now</a>
                    </div>						
                </div>                     
    </div>
    <!-- /card 2 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/garlic_PNG12801.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Garlic</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
              <a href="#" class="btn btn-primary">Buy now</a>
          </div>						
      </div>              
    </div>
    <!-- /card3 -->

    <div class="col-sm-3">
      <div class="thumb-wrapper">
          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
          <div class="img-box">
              <img src="images/ginger_PNG16800.png" class="img-responsive img-fluid" alt="">									
          </div>
          <div class="thumb-content">
              <h4 class="h4-responsive">Ginger</h4>									
              <div class="star-rating">
                  <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
              </div>
              <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
              <a href="#" class="btn btn-primary">Buy now</a>
          </div>						
      </div>            
    </div>
    <!-- /card 4-->
                  </div>
                  <!-- /store-row-3 -->

                    <!-- Store 3 (a) -->
                    <div class="row store-row-3 py-3">
  
                      <div class="col-sm-3">
                        <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                                <img src="images/mushroom_PNG3219.png" class="img-responsive img-fluid" alt="">									
                            </div>
                            <div class="thumb-content">
                                <h4 class="h4-responsive">Mushroom</h4>									
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>						
                        </div>                      
            </div>
            <!-- /card 1 -->
  
                <div class="col-sm-3">
                  <div class="thumb-wrapper">
                      <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                      <div class="img-box">
                          <img src="images/onion_PNG3821.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="thumb-content">
                          <h4 class="h4-responsive">Beetroot</h4>									
                          <div class="star-rating">
                              <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                          </div>
                          <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                          <a href="#" class="btn btn-primary">Buy now</a>
                      </div>						
                  </div>                     
      </div>
      <!-- /card 2 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/palm_tree_PNG93356.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Plm trees</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Buy now</a>
            </div>						
        </div>              
      </div>
      <!-- /card3 -->
  
      <div class="col-sm-3">
        <div class="thumb-wrapper">
            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="images/wheat_PNG108.png" class="img-responsive img-fluid" alt="">									
            </div>
            <div class="thumb-content">
                <h4 class="h4-responsive">Wheat</h4>									
                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                </div>
                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                <a href="#" class="btn btn-primary">Buy now</a>
            </div>						
        </div>            
      </div>
      <!-- /card 4-->
                    </div>
                    <!-- /store-row-3(a)-->
               
                    </div>
                    <!-- /store items -->
                </div>
                <!-- /col-md-12-->     
                </div>
                <!-- /container -->




    


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>