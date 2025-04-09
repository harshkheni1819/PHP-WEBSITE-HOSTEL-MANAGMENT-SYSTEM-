<?php 
session_start();
include('connect.php'); 
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
// 	header("location:sign in.php");
// 	exit;
// }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="l.jpg" type="image/png">
        <title>AASHRAY STAY</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/mi.css">
        
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><image src=l.jpg height=90 width=140><b ></b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="index.php">HOME</a></li> 
                            <li class="nav-item"><a class="nav-link" href="aboutus.php">ABOUT US</a></li>
                            <li class="nav-item"><a class="nav-link" href="roommaster.php">ROOM</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">GALLERY</a></li>
                            <li class="nav-item"><a class="nav-link" href="staff.php">STAFF</a></li>
                             <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHER</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="event.php">EVENT</a></li>
                                    <li class="nav-item"><a class="nav-link" href="news.php">NEWS</a></li>
                                    <li class="nav-item"><a class="nav-link" href="menu.php">MENU</a></li>
                                </ul>
                            </li> 
                            
                        </ul>
</div>
                        <p>
</p>

<li class="nav-item  dropdown">
						
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><image src=profile1.jpg height=60 width=70></a>
<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
						$loggedin= true;
					}
					else{
						$loggedin= false;
					}
                   
				
										if(!$loggedin)
										{
										echo'  <ul class="dropdown-menu">
                                        <li>  <a href="r.php">Login</a> </li>';
										}
                                       
											if($loggedin)
											{

											echo '  <ul class="dropdown-menu">
                                            <li><a href="profile.php"> Profile </a></li>
											<li><a href="logout.php"> Log Out </a></li>';
											
											}
                                            

										
					?>
                     </ul>
                     </ul>

                                        </li>
                                       

                   
                </nav>
            </div>
            
        </header>
        <!--================Header Area =================-->
        
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentLocation = window.location.pathname.split("/").pop(); // Get the current page name
        let navLinks = document.querySelectorAll(".nav-item a");

        navLinks.forEach(link => {
            if (link.getAttribute("href") === currentLocation) {
                link.parentElement.classList.add("active");
            } else {
                link.parentElement.classList.remove("active");
            }
        });
    });
</script>
