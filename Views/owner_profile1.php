<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user-group'])) {
header('Location: login-student.html');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <title>ESTE RENTING</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="../assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="../assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

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
    <script src="../assets/js/pace.min.js"></script>


</head>
<body>

<div id="wrapper">

    <div class="header">
        <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
             role="navigation">
            <div class="container">

            <div class="navbar-identity">


                <a href="../index.php" class="navbar-brand logo logo-title">
                <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
                </span>ESTE<span>LOCATION </span> </a>


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
                        <li class="postadd nav-item"><a id="rent" class="btn btn-block   btn-border btn-post btn-primary-dark nav-link" href="category.php">Rent an Appartment</a>
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


    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="inner-box ">
                    <div class="row">

             

                        <div class="col-sm-6">
                            <div class="seller-info seller-profile">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="seller-profile-img">
                                           
                                        </div>
                                    </div>
                                        <div class="col-md-9">
                                            <h3 class="no-margin no-padding link-color uppercase "> <?php echo $_GET['nom'].' '.$_GET['prenom']; ?></h3>

                                            <div class="text-muted">
                                                99.8% positive Feedback
                                            </div>
                                            <div class="user-ads-action">
                                                <a class="btn btn-sm  btn-success "><i class=" icon-plus"></i> Follow </a>
                                            </div>

                                          
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="col-sm-6">

                            <div class="seller-contact-info">

                                <h3 class="no-margin uppercase color-danger"> Contact Information </h3>

                                <dl class="dl-horizontal">

                                    <dt>About:</dt>
                                    <dd class="contact-sensitive"> <?php echo $_GET['bio']; ?>
                                    </dd>
                                    <dt>Telephone:</dt>
                                    <dd class="contact-sensitive"><?php echo '0'.$_GET['phone']; ?></dd>

                                    <dt>Email:</dt>
                                    <dd class="contact-sensitive"> <?php echo $_GET['email']; ?></dd>

                                </dl>


                            </div>

                        </div>
                 
                    </div>

                </div>

                <div  class="container">
                    <div style="background-color: #CEF6F5;" class="section-content">

                 <?php

                    require("config.php");

                    $id=$_GET['id'];

                    $sql="SELECT h.id_house as id_h, MAX(h.category) as c, MAX(h.title) as t
                          , MAX(h.time) as tim , MAX(h.describe) as d , MAX(h.price) as p , MAX(h.id_owner) as id_o
                          , MAX(i.nom_image) as img1 FROM House h , image i 
                          WHERE i.id_house = h.id_house 
                          AND h.id_owner='$id'
                          GROUP BY h.id_house" ;

                    $result=oci_parse($con,$sql);

                    oci_execute($result);

                    
                            $h=new House;
                           
                            while(( $row=oci_fetch_assoc($result)) != false ){

                              

                              if(!empty($row['ID_H'])){

                            
                               $h->id_house=$row['ID_H'];
                               $h->id_owner=$row['ID_O'];
                               $h->category=$row['C'];
                               $h->title=$row['T'];
                               $h->time=$row['TIM'];
                               $h->price=$row['P'];
                               $h->describe=$row['D'];
                               $h->img1=$row['IMG1'];

                              
                              ?>

                                          <div id="item" class="item-list"><div class="row">
                                <div class="col-md-2 no-padding photobox">
                                    <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 5 </span> <a
                                            href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><img class="thumbnail no-margin" src="images/<?php echo( $h->img1); ?>" alt="img"></a>
                                    </div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><?php echo($h->title); ?></a></h5>
                                        <span class="info-row">  <span class="date"><i
                                                class=" icon-clock"> </i> <?php echo($h->time); ?> </span> - <span class="category"><?php echo($h->category); ?> </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"><?php echo($h->price); ?> Dh</h2>
                                    </div>
                                <!--/.add-desc-box-->
                            </div>
                            </div>

                            <?php

                                         }
                                     }
                                             
                                      
                                 oci_close($con);
                                


                          ?>

                         </div>
                            </div>
                                </div>


            </div>

        </div>
  

                            


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
							<div class="mobile-app-content">
								<h4 class="footer-title">Mobile Apps</h4>
								<div class="row ">
									<div class="col-6  ">
										<a class="app-icon" target="_blank"  href="https://itunes.apple.com/">
											<span class="hide-visually">iOS app</span>
											<img src="images/site/app_store_badge.svg" alt="Available on the App Store">
										</a>
									</div>
									<div class="col-6  ">
										<a class="app-icon"  target="_blank" href="https://play.google.com/store/">
											<span class="hide-visually">Android App</span>
											<img src="images/site/google-play-badge.svg" alt="Available on the App Store">
										</a>
									</div>
								</div>
							</div>
						</div>

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

						<img src="images/site/payment/master_card.png" alt="img">
						<img alt="img" src="images/site/payment/visa_card.png">
						<img alt="img" src="images/site/payment/paypal.png">
						<img alt="img" src="images/site/payment/american_express_card.png"> <img alt="img" src="images/site/payment/discover_network_card.png">
						<img alt="img" src="images/site/payment/google_wallet.png">
					</div>

					<div class="copy-info text-center">
						&copy; 2017 BootClassified. All Rights Reserved.
					</div>

				</div>

			</div>
		</div>
	</div>
</footer>
<!--/.footer-->

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

</body>
</html>
