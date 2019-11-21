<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user-group'])) {
header('Location: login-group.html');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>ESTE RENTING</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>


</head>
<body>

    <?php include("House.php") ?>

<div id="wrapper">

    <div class="header">
        <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
             role="navigation">
            <div class="container">

            <div class="navbar-identity">


                <a href="index.php" class="navbar-brand logo logo-title">
                <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
                </span>ESTE<span>RENTING </span> </a>


                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
                        type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>


                </button>


            </div>



                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto navbar-right">
                        <li class="dropdown no-arrow nav-item"><a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                            <span><b><?php echo $_SESSION['user-group']; ?></b></span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
                            <ul
                                    class="dropdown-menu user-menu dropdown-menu-right">
                                <li class="dropdown-item"><a href="logout-group.php"><i class=" icon-logout "></i> Log out </a>
                                </li>
                                <li class="dropdown-item"><a href=""><i class=" icon-user "></i> Profile </a>
                                </li>
                            </ul>
                        </li>
                        <li class="postadd nav-item"><a  id="rent" class="btn btn-block   btn-border btn-post btn-primary-dark nav-link" href="category.php">Rent an Appartment</a>
                        </li>
                        <li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="post-ads.php">Post Free Add</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav aria-label="breadcrumb" role="navigation" class="pull-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="icon-home fa"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.html">All Ads</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo($h->category); ?></li>
                        </ol>
                    </nav>


                    <div class="pull-right backtolist"><a href="category.php"> <i
                            class="fa fa-angle-double-left"></i> Back to Posts</a></div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner inner-box ads-details-wrapper">
                        <h2> <?php echo($h->title); ?>
                        </h2>
                        <span class="info-row"> <span class="date"><i class=" icon-clock"> </i> <?php echo($h->time); ?> </span> - <span
                                class="category"><?php echo($h->category); ?></span>

                        <div class="ads-image">
                            <h1 class="pricetag"> <?php echo($h->price); ?> Dh </h1>
                            <ul  class="bxslider">
                                <li style="height: auto;"><img src="images/<?php echo $tab[0]; ?>" alt="img"/></li>
                                <li style="height: auto;"><img src="images/<?php echo $tab[1]; ?>" alt="img"/></li>
                                <li style="height: auto;"><img src="images/<?php echo $tab[2]; ?>" alt="img"/></li>
                                <li style="height: auto;"><img src="images/<?php echo $tab[3]; ?>" alt="img"/></li>
                                <li style="height: auto;"><img src="images/<?php echo $tab[4]; ?>" alt="img"/></li>
                            </ul>
                            <div id="bx-pager">
                                <a class="thumb-item-link" data-slide-index="0" href=""><img
                                        src="images/<?php echo $tab[0]; ?>" alt="img"/></a>
                                <a class="thumb-item-link" data-slide-index="1" href=""><img
                                        src="images/<?php echo $tab[1]; ?>" alt="img"/></a>
                                <a class="thumb-item-link" data-slide-index="2" href=""><img
                                        src="images/<?php echo $tab[2]; ?>" alt="img"/></a>
                                <a class="thumb-item-link" data-slide-index="3" href=""><img
                                        src="images/<?php echo $tab[3]; ?>" alt="img"/></a>
                                <a class="thumb-item-link" data-slide-index="4" href=""><img
                                        src="images/<?php echo $tab[4]; ?>" alt="img"/></a>
                            </div>
                        </div>
                        <!--ads-image-->

                        <div class="Ads-Details">
                            <h5 class="list-title"><strong>Ads Details</strong></h5>

                            <div class="row">
                                <div class="ads-details-info col-md-8">
                                    <p><?php echo($h->title); ?>. </p>
                                    <aside class="panel panel-body panel-details">
                                        <ul>
                                            <li>
                                                <p class=" no-margin "><strong>Price:</strong> <?php echo($h->price); ?> Dh </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Type:</strong> <?php echo($h->category); ?> </p>
                                            </li>
                                            <li>
                                                <p class=" no-margin "><strong>Published:</strong> <?php echo($h->time); ?> </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Describe:</strong> <?php echo($h->describe); ?>  </p>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                                    
                                <div class="col-md-4">
                                    <h5><b>Owner Informations:</b></h5>
                                    <aside class="panel panel-body panel-details">
                                        <ul>
                                            <li>
                                                <p class=" no-margin "><strong>Name:</strong> <?php echo $nom.' '.$prenom; ?> </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Phone:</strong> <?php echo("0".$phone); ?> </p>
                                            </li>
                                            <li>
                                                <p class=" no-margin "><strong>Bio:</strong> <?php echo($bio); ?> </p>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.ads-details-wrapper-->

                </div>
                <!--/.page-content-->

                <div class="col-md-3  page-sidebar-right">
                    <aside>
                        <div class="card sidebar-card  bg-contact-seller">
                            <div class="card-header">Contact Owner</div>
                            <div class="card-content user-info">
                                <div class="card-body text-center">
                                    <div class="seller-info">
                                        <h3 class="no-margin"><?php echo $nom.' '.$prenom; ?></h3>
                                    </div>
                                    <div class="user-ads-action"><a href="<?php echo 'owner_profile1.php?id='.$h->id_owner.'&nom='.$nom.'&prenom='.$prenom.'&phone='.$phone.'&bio='.$bio.'&email='.$email; ?>"
                                                                    class="btn   btn-secondary btn-block"><i
                                            class=" icon-user"></i> Profile </a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!--/.page-side-bar-->
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			<div class="row">

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">About us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">About Company</a></li>
    							<li><a href="#">For Business</a></li>
    							<li><a href="#">Our Partners</a></li>
    							<li><a href="#">Press Contact</a></li>
    							<li><a href="#">Careers</a></li>
    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Help & Contact</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">
    								Stay Safe Online
    							</a></li>
    							<li><a href="#">
    								How to Sell</a></li>
    							<li><a href="#">
    								How to Buy
    							</a></li>
    							<li><a href="#">Posting Rules
    							</a></li>

    							<li><a href="#">
    								Promote Your Ad
    							</a></li>

    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">More From Us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="faq.html">FAQ
    							</a></li>
    							<li><a href="blogs.html">Blog
    							</a></li>
    							<li><a href="#">
    								Popular Searches
    							</a></li>
    							<li><a href="#"> Site Map
    							</a></li> <li><a href="#"> Customer Reviews
    						</a></li>


    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Account</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="account-home.html"> Manage Account
    							</a></li>
    							<li><a href="login.html">Login
    							</a></li>
    							<li><a href="signup.html">Register
    							</a></li>
    							<li><a href="account-myads.html"> My ads
    							</a></li>
    							<li><a href="seller-profile.html"> Profile
    							</a></li>
    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-4 col-xl-4 col-md-4 col-12">
    					<div class="footer-col row">

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="hero-subscribe">
    								<h4 class="footer-title no-margin">Follow us on</h4>
    								<ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
    									<li><a class="icon-color fb" title="Facebook" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i> </a></li>
    									<li><a class="icon-color tw" title="Twitter" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i> </a></li>
    									<li><a class="icon-color gp" title="Google+" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i> </a></li>
    									<li><a class="icon-color lin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i> </a></li>
    									<li><a class="icon-color pin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-pinterest-p"></i> </a></li>
    								</ul>
    							</div>

    						</div>
    					</div>
    				</div>
    				<div style="clear: both"></div>

    				<div class="col-xl-12">
    					<div class=" text-center paymanet-method-logo">
                            ESTE RENTING : Housing for all students
    					</div>

    					<div class="copy-info text-center">
    						&copy; 2018 ESTE RENTING. All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>



<!-- bxSlider Javascript file -->
<script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });

</script>

</body>
</html>
