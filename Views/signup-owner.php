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
<div id="index.php">

       <div class="header">
        <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
             role="navigation">
            <div class="container">

            <div class="navbar-identity">


                <a href="../index.php" class="navbar-brand logo logo-title">
                <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
                </span>ESTE<span>RENTING </span> </a>


                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
                        type="button">

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>


                </button>


            </div>



                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto navbar-right">
                        <li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-primary-dark nav-link" href="login-group.html">Rent an Appartment</a>
                        </li>
                        <li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="login-owner.html">Post Free Add</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->
<br><br><br>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="alert alert-success" for="f" id="success" style="display: none;"></label>
                                <label class="alert alert-danger" for="f" id="failed" style="display: none;"></label>
                                <form id="f" class="form-horizontal">
                                    
                                    <fieldset>
                            			<!-- Text input-->
                                        <div class="form-group  row">
                                            <label class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="f_name" placeholder="First Name" class="form-control input-md"
                                                       required type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row">
                                            <label class="col-md-4 control-label">Last Name</label>

                                            <div class="col-md-6">
                                                <input id="l_name" placeholder="Last Name"
												required class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row">
                                            <label class="col-md-4 control-label">Phone</label>

                                            <div class="col-md-6">
                                                <input id="phone" placeholder="0*********"
												required class="form-control input-md" type="tel" maxlength="10" pattern="[0-9]{10}">
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textarea">About you</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" id="textarea" name="about"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group  row">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control email" id="inputEmail3"
												required placeholder="exemple@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group  row">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="m_pass" type="password" minlength="5" class="form-control" id="inputPassword3"
												required placeholder="*****">

                                                <p class="help-block">At least 5 characters
                                                    <!--Example block-level help text here.--></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
												<input onclick="add_owner()" type="button" value="Sign in" class="btn btn-primary">
											</div>
                                            <div class="col-md-4">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
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
    <!--/.footer-->

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

<script>
function add_owner()
{
    var fname=document.getElementById("f_name").value;
    var lname=document.getElementById("l_name").value;
    var phone=document.getElementById("phone").value;
    var bio=document.getElementById("textarea").value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById("m_pass").value;


    if(fname && lname && phone && bio && email && pass){
   
  
          //create XMLHttpRequest()
          var xhttp=new XMLHttpRequest();

          xhttp.onreadystatechange= function() {
            //if the request opened successfully
            if(this.readyState == 4 && this.status == 200){
               var res=this.responseText;
               
               
               res=parseInt(res);
               if(res==1)
               {
                $("#success").html("Your account is created successfully! <a href='login-owner.html'>Login?</a>");
                $("#success").css("display","block");
                $("#failed").css("display","none");
               }else{
                $("#failed").html(email+" is used by another account!");
                $("#failed").css("display","block");
                $("#success").css("display","none");
               }
            }
          }

          //open the request
          xhttp.open("GET","../Controllers/add-owner.php?fname="+fname+"&lname="+lname+"&phone="+phone+"&bio="+bio+"&email="+email+"&pass="+pass,true);
          //send the request
          xhttp.send();
        }
}
</script>

</body>
</html>
