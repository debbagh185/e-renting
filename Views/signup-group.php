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
<div >

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
                        <h2 id="titre" class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>
                        <h4 id="etd" style="display: none;"> Student Number: <span id="n">1</span> <hr></h4>

                        <div class="row">
                            <div class="col-sm-12">
								<form id="grp" action="" method="">
									<div class="form-group row">
										<label for="inputName" class="col-sm-4 col-form-label">Group Name</label>
										<div class="col-sm-6">
											<input id="g-name" type="text" class="form-control" placeholder="Group">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
										<div class="col-sm-6">
											<input id="g-pass" type="password" class="form-control" placeholder="*********">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputNumber" class="col-sm-4 col-form-label">Students number into the group</label>
										<div class="col-sm-6">
											<select id="g-nbr" class="custom-select">
												<option value="1" selected>Select a number</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
												<option value="4">Four</option>
												<option value="5">Five</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="button" onclick="post()" class="btn btn-primary" value="Sign in">
										</div>
									</div>
                                    <span id="error" class="alert alert-danger" style="display: none;"></span>
								</form>
                                
                                <form style="display: none;" id="std" action="" method="">
                                    <span id="error1" class="alert alert-danger" style="display: none;"></span>
                                    <span id="error2" class="alert alert-success" style="display: none;"></span>

                                    <label id="nbr" class="alert alert-info" style="width: 100%;"></label>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-4 col-form-label">First Name</label>
                                        <div class="col-sm-6">
                                            <input id="fname_std" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-4 col-form-label">Last Name</label>
                                        <div class="col-sm-6">
                                            <input id="lname_std" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-6">
                                            <input id="email_std" type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-2">
                                            <input id="next" type="button" onclick="add_std()" class="btn btn-primary" value="Next">
                                        </div>
                                        <div class="col-sm-2">
                                            <input id="val" disabled="" type="button" onclick="send_mails()" class="btn btn-primary" value="Validate">
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-10">
                                            <label style="display: none;" id="msg" class="alert alert-success"></label>
                                        </div>
                                    </div>
                                    
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

<script type="text/javascript">

function post()
{

    var name=document.getElementById("g-name").value;
    var pass=document.getElementById("g-pass").value;
    var nbr=document.getElementById("g-nbr").value;
  
  //create XMLHttpRequest()
  var xhttp=new XMLHttpRequest();

  xhttp.onreadystatechange= function() {
    //if the request opened successfully
    if(this.readyState == 4 && this.status == 200){
        if(name && pass && nbr){
          var x= this.responseText;
          if(x==0){
          document.getElementById("nbr").innerHTML="The group is created successfully!"
          document.getElementById("titre").innerHTML=name;
          document.getElementById("etd").style.display="block";
          document.getElementById("grp").style.display="none";
          document.getElementById("std").style.display="block";
          }else if(x==1){
                document.getElementById("error").innerHTML = "The group is already existed!!" ;
                document.getElementById("error").style.display="block";
                 }
        }else{
            document.getElementById("error").innerHTML = "Please fill all feilds!" ;
            document.getElementById("error").style.display="block";
        }
    }
  }

  //open the request
  xhttp.open("GET","../Controllers/add-group.php?name="+name+"&pass="+pass+"&nbr="+nbr,true);
  //send the request
  xhttp.send();




}

function add_std()
{

    var grp_name=document.getElementById("titre").innerHTML;
    var fname_std=document.getElementById("fname_std").value;
    var lname_std=document.getElementById("lname_std").value;
    var email_std=document.getElementById("email_std").value;
    var nmbr=document.getElementById("n").innerHTML;
  
  //create XMLHttpRequest()
  var xhttp=new XMLHttpRequest();

  xhttp.onreadystatechange= function() {
    //if the request opened successfully
    if(this.readyState == 4 && this.status == 200){
        document.getElementById("nbr").style.display="none";
        if(fname_std && lname_std && email_std){
      var m = this.responseText ;
      m=parseInt(m);
      nmbr=parseInt(nmbr);
      if(m==nmbr)
          {
            $("#next").prop("disabled",true);
            $("#val").prop("disabled",false);
            document.getElementById("std").reset();

          }else{
            nmbr=nmbr+1;
            document.getElementById("n").innerHTML=nmbr;
            document.getElementById("error1").style.display="none";
            document.getElementById("error2").innerHTML = lname_std+" "+fname_std+" is added successfully!" ;
            document.getElementById("error2").style.display="block";
            document.getElementById("std").reset();
          }
        }else{
            document.getElementById("error1").innerHTML = "Please fill all feilds!" ;
            document.getElementById("error1").style.display="block";
        }
    }
  }


  //open the request
  xhttp.open("GET","../Controllers/add-student.php?fname_std="+fname_std+"&lname_std="+lname_std+"&email_std="+email_std+"&grp_name="+grp_name+"&nbr="+nmbr,true);
  //send the request
  xhttp.send();



}

function send_mails()
{
    var name=document.getElementById("titre").innerHTML;
   
  
  //create XMLHttpRequest()
  var xhttp=new XMLHttpRequest();

  xhttp.onreadystatechange= function() {
    //if the request opened successfully
    if(this.readyState == 4 && this.status == 200){
       $("#msg").html(this.responseText);
       $("#msg").css("display","block");
    }
  }

  //open the request
  xhttp.open("GET","../Controllers/send.php?name="+name,true);
  //send the request
  xhttp.send();
}
</script>


</body>
</html>
