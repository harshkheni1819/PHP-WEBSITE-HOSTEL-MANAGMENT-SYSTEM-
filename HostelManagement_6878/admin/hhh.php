<!DOCTYPE html>
<?php

?>

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
        <link rel="icon" href="l.jpg" type="image/png">
        <title>AASHRAY STAY</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<style>
		.fa{
			color:black;
		}

.page-content1 {
    background-color:white;
    position: relative;
    margin: 0;
    padding: 21px 200px 24px;
	box-shadow:1px 1px white;
}
	   

		</style>

	<body class="no-skin">
		<?php
		session_start();
		?>
		<div id="navbar" class="navbar navbar-default ace-save-state" style="background-color:#62A8D1;" >
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only" >Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
				<a ><image src=l.jpg height=60 width=100><b></b></a>
						<small>
							
						
						

	                    </span>
							
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" style="border:1px solid black; box-shadow:0px 0px 9px 1px;" role="navigation">
					<ul class="nav ace-nav">
					<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php
							$pic=$_SESSION['photo'];
						echo "<img  class='nav-user-photo' src='images/$pic'>";
						?>	
						<span class="user-info" style="color:black;">
									<small>Welcome,</small>
									<?php
									echo $_SESSION['aname'];
									?>
								</span>

								<i class="ace-icon fa fa-caret-down" style="color:black"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li class="divider"></li>

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container  ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state" style="background-color:a#29705d;">
			<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
				<li class="" >
						<a href="dashboard.php">
							
							<i class="fa fa-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="facility_master.php">
			
							<i class="fa fa-database"></i>
							<span class="menu-text"> Facility </span>
						</a>

						<b class="arrow"></b>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
						
							
							<i class="fa fa-bed"></i>
							
							<span class="menu-text"> Room </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="room_master.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Room master
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="room_details.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Room details
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							
							<i class="fa fa-group"></i>
							<span class="menu-text"> Staff </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="staff_master.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Staff master
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="staff_details.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Staff details
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

<li class="">
						<a href="#" class="dropdown-toggle">
						
							
						<i class="fa fa-image"></i>
							
							<span class="menu-text"> Gallery </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="gallery_master.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Gallery master
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="gallery_details.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Gallery details
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="menu.php">
							
							<i class="fa fa-cutlery"></i>
								Menu
                               </a>
                           	<b class="arrow"></b>
					</li>

					<li class="">
						<a href="news.php">
							
						<i class="fa fa-leanpub"></i>
								News
                               </a>
                           	<b class="arrow"></b>
					</li>
					<li class="">
						<a href="event.php">
							
						<i class="fa fa-futbol-o"></i>
								Event
                               </a>
                           	<b class="arrow"></b>
					</li>
					<li class="">
						<a href="viewvideo.php">
							
						<i class="fa fa-play-circle-o"></i>
								View video
                               </a>
                           	<b class="arrow"></b>
					</li>
					<!-- Reports Section -->
<li>
    <a href="#" class="dropdown-toggle">
        <i class="fa fa-bar-chart" style="font-size:24px; color:#5cb85c;"></i>
        <span class="menu-text"> Reports </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li>
            <a href="yearly_report.php">
                <i class="menu-icon fa fa-caret-right"></i> Monthly Sales Report
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>
					
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							
							<i class="fa fa-file-o" style="font-size:24px; color:#428BCA;"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary"></span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="faq.php">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="aboutus.php">
									<i class="menu-icon fa fa-caret-right"></i>
									About us
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="contactus.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Contact us
								</a>

								<b class="arrow"></b>
							</li>
	</ul>
	</li>
							<li class="active open">
						<a href="#" class="dropdown-toggle">
							
							<i class="fa fa-file-o" style="font-size:24px; color:#428BCA;"></i>

							<span class="menu-text">
								User Master

								<span class="badge badge-primary"></span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="user_query.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Query
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="userbooking.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Booking
								</a>

								<b class="arrow"></b>
							</li>


						</ul>
					</li>
				</ul><!-- /.nav-list -->
				

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content" >
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							
							
						</ul><!-- /.breadcrumb -->

					
					</div>

					<div class="page-content1 p-0">
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->