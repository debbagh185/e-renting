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
<div>

<?php include("Controllers/counter.php"); ?>

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
                        <li class="postadd nav-item"><a id="rent" class="btn btn-block   btn-border btn-post btn-primary-dark nav-link" href="Views/category.php">Rent an Appartment</a>
                        </li>
                        <li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="Views/post-ads.php">Post Free Add</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="intro" style="background-image: url(assets/images/bg3.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                     <div class="row animated fadeInUp">
                        <div class="col-xl-12"><br><br><br><br><br><br><br> 
                             <h1 class="animated fadeInDown">You're Welcome</h1><br>
                        </div>
                            <div class="col-xl-6 col-sm-6">
                                
                    <p class="sub animateme fittext3 animated fadeIn">
                        View your apartment for rent
                    </p>
                        <a class="btn btn-border btn-post btn-primary nav-link" href="Views/post-ads.php">View it</a>
                            </div>

                            <div class="col-xl-6 col-sm-6">
                               
                    <p class="sub animateme fittext3 animated fadeIn">
                        Get your apartment in minutes
                    </p>
                    <a class="btn btn-border btn-post btn-primary nav-link" href="Views/category.php">Find it</a>
                            </div>

                     </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <div class="main-container">
        <div class="page-info hasOverly" style="background-image: linear-gradient( #16a085 ,#2E2E2E ); margin-top: -3%; background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-person"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?php echo $c0; ?></span></h5>

                                    <div class="iconbox-wrap-text">Owners</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?php echo $c1; ?></span></h5>

                                    <div class="iconbox-wrap-text">Students group</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-home"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?php echo $c2; ?></span></h5>

                                    <div class="iconbox-wrap-text">Appartments</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-eye"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Visitors</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
        <div class="container">

            <div style="clear: both"></div>

                <!-- /.main-container -->

            <div class="row">

                 <div class="col-md-2"></div>
                <div class="col-md-8 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Appartments News </h2>

                        <div id="pubs"></div>
                      

                    </div>

                </div>
                <div class="col-md-2"></div>
                
            </div>
        </div>
    </div>

    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div  class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call us
                    at (+212) 603537387</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (+212) 603537387 </a>
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
    							
    							<li><a href="login.html">Login
    							</a></li>
    							<li><a href="signup.html">Register
    							</a></li>

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

</div>
<!-- /.index.php -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>

<script type="text/javascript">

function showPubs()
{
 
  //create XMLHttpRequest()
  var xhttp=new XMLHttpRequest();

  xhttp.onreadystatechange= function() {
    //if the request opened successfully
    if(this.readyState == 4 && this.status == 200){
       $("#pubs").html(this.responseText);
    }
  }

  //open the request
  xhttp.open("GET","Controllers/news.php",true);
  //send the request
  xhttp.send();
}
    setInterval(showPubs,1000);

</script>



<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>

<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>


</body>
</html>
