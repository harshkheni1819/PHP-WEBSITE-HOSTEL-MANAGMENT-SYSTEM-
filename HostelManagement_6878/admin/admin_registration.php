<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Hostel management</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-119386393-1');
    </script>
    <script>
        function chk() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("conpassword").value;
            if (a != b)
                alert('password does not match');
        }

        function chk2() {
            var n = document.myform.name.value;
            // if (n.search(/^[a-zA-Z]+$/) === -1) {
            if (n.search(/^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/) === -1) {
                alert("Only alphabets are allowed in Username!")
                // document.getElementById("name").innerHTML = "* Name is required";
                return false;
            }
        }

        function chk3() {
            var e = document.myform.email.value;
            if (e.search(/^\S+@\S+\.\S+$/) === -1) {
                alert("Email id is invalid!")
                // document.getElementById("email").innerHTML = "* Email Id is required";
                return false;
            }
        }

        function chk4() {
            var c = document.myform.contact.value;
            if (c.length < 10) {
                alert("Mobile number must be 10 digits!");
                // document.getElementById("contact").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
            if (c.length > 10) {
                alert("Mobile number must be 10 digits!");
                // document.getElementById("contact").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
        }

        function chk5() {
            var pass = document.myform.password.value;
            if (pass.length < 3) {
                alert("Password length must be greater than 3 characters!");
                // document.getElementById("password").innerHTML = "* Password length must be greater then 3 characters";
                return false;
            }

            if (pass.length > 10) {
                alert("Password length must be smaller then 10 characters!")
                // document.getElementById("password").innerHTML = "* Password length must be smaller then 10 characters";
                return false;
            }
        }

        function chk6() {
            var addressProofImage = document.getElementById("addressproofimg").files.item(0).name;
            if (addressProofImage.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Address proof image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk7() {
            var licenceImage = document.getElementById("licenceimg").files.item(0).name;
            if (licenceImage.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Licence image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk8() {
            var aadharCardImgName = document.getElementById("adharcardimg").files.item(0).name;
            if (aadharCardImgName.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Aadhar card image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk9() {
            var photo = document.getElementById("photo").files.item(0).name;
            if (photo.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Photo image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk10() {
            var ac = document.myform.adharcardno.value;
            if (ac.length < 12) {
                alert("Aadhar card number must be 12 digits!")
                // document.getElementById("adharcardno").innerHTML = "* Adhdharcard no must be 10 digits";
                return false;
            }
            if (ac.length > 12) {
                alert("Aadhar card number must be 12 digits! ")
                // document.getElementById("adharcardno").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
        }

        function chk11() {
            var a = new Date(document.getElementById('licenceexp').value);
            //var d = document.getElementById('booking_date').value;
            var d = new Date().getTime();

            if (a < d)
                alert('Please select your date more than current date!');
        }

        function clickEyeButton(type) {
            if (type === "password") {
                const ele = document.getElementById("password");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password"
            } else {
                const ele = document.getElementById("conpassword");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password";
            }
        }
    </script>
    </head>
	<body class="login-layout">
        <?php
        include('connect.php');
        ?>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">HOSTEL</span>
									<span class="white" id="id-text2">MANAGEMENT</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>
<?php
if(isset($_POST['btnlogin']))
{
    $uname=$_POST['txtuname'];
    $password=$_POST['txtpassword'];
    $q=mysqli_query($con,"select * from admin_registration where uname='$uname' and pass='$password'");
    $cnt=mysqli_num_rows($q);
    if($cnt>0)
		header('location:dashboard.php');
    else
        echo "<script>alert('login denied')</script>";

}
?>
											<form method=post>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="txtuname" onchange="chk2()"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="txtpassword"  onchange="chk5()" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" name="btnlogin" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											

											

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email"  onchange="chk3()" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>
<?php

if(isset($_POST['btnins']))
{
    $email=$_POST['txtemail'];
    $uname=$_POST['txtuname'];
	$mobileno=$_POST['txtmobileno'];
    $password=$_POST['txtpass'];
    $photo=$_FILES['txtphoto']['name'];
    $dst="images/".$photo;
    $q=mysqli_query($con,"insert into admin_registration values('','$email','$uname','$mobileno','$password','$photo')");
	echo "insert into admin_registration values('','$email','$uname','$mobileno','$password','$photo')";
    if($q)
    {
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$dst);
        echo "<script>alert('Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>
											<form method="post" enctype="multipart/form-data">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" name="txtemail" onchange="chk3()"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="txtuname" onchange="chk2()" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="mobileno" class="form-control" placeholder="Mobileno" name="txtmobileno"title="Error Message" onchange="chk4()"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="txtpass"onchange="chk5()"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" name="rpass"onchange="chk()"/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="file" class="form-control" name="txtphoto"/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>


					<input type="submit" class="width-65 pull-right btn btn-sm btn-success" name="btnins" value="Insert">
															
								</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
