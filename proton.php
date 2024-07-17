<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proton</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    


    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <span class="text-body">|CAR RENTAL @2024</span>
                    
              </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
				  </a>
					<?php
                // Check if the user is logged in
                session_start();
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<span class="text-body px-3">Welcome, ' . $username . '</span>';
                }
                ?>
                </div>
            </div>
        </div>
    </div>


<!-- Navbar Start -->
        <div class="position-relative px-lg-9 col-lg-12" style="z-index: 7;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">CAR RENTAL&nbsp;</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="px-0">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home&nbsp;&nbsp;</a>
                        <a href="company.php" class="nav-item nav-link">Our company &nbsp;</a>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">OUR PRODUCT&nbsp;</a>
							<div class="dropdown-menu rounded-0 m-0">
							<a href="#" class="dropdown-divider">Our Cars&nbsp;</a>
								<a href="mitsubishi.php" class="dropdown-item">Mitsubishi</a>
                                <a href="perodua.php" class="dropdown-item">Perodua</a>
                              <a href="proton.php" class="dropdown-item">Proton</a>
								<a href="honda.php" class="dropdown-item">Honda</a>
								<a href="Toyota.php" class="dropdown-item">Toyota</a>
						</div>
                      
                        </div>
						<a href="order.php" class="nav-item nav-link">Order&nbsp; &nbsp;&nbsp;</a>
                        <a href="contact.php" class="nav-item nav-link">Contact Us&nbsp; &nbsp;&nbsp;</a>
												<!-- Logout Button -->
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="MySQL/logout.php" class="nav-item nav-link">Logout</a>';
                }
                ?>
                    </div>
			  </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



<!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">our cars&nbsp;</h1>
        <div class="d-inline-flex text-white">
          <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">proton</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">proton</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="persona baru.png" alt="">
                        <h4 class="text-uppercase mb-4">proton persona</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html" class="btn btn-primary px-3" href="">RM120/Day</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4">
                        <img class="img-fluid mb-4" src="preve.png" alt="">
                        <h4 class="text-uppercase mb-4">proton preve</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html" class="btn btn-primary px-3" href="">RM90/Day</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img src="ertiga.png" alt="" width="1198" height="786" class="img-fluid mb-4">
                        <h4 class="text-uppercase mb-4">proton ertiga</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html" class="btn btn-primary px-3" href="">RM140/Day</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="wira.png" alt="">
                        <h4 class="text-uppercase mb-4">PROTON WIRA</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html" class="btn btn-primary px-3" href="">RM60/Day</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="PERSONA 2015.png" alt="">
                        <h4 class="text-uppercase mb-4">proton persona 2015</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html"class="btn btn-primary px-3" href="">RM90/Day</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="exora.png" alt="">
                        <h4 class="text-uppercase mb-4">proton exora</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a href="order.html" class="btn btn-primary px-3" href="">RM130/Day</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->


     <!-- Banner Start -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to test drive car ?</h3>
                            <p class="mb-4">Your dreams car await you. What are you waiting for?&nbsp; &nbsp;&nbsp;</p>
                            <a href="order.html" class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                            <p class="mb-4">Choose Your Desire Car to Rent From Over 5 Latest Car Models</p>
                            <a href="order.html" class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner End -->


   
 
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">Car Rental</a>. All Rights Reserved.</p>
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->					
        <p class="m-0 text-center text-body">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>