<?php
    include("hhh.php");
    error_reporting(1);
    session_start();
?>

<body class="no-skin">
<div id="user-profile-2" class="user-profile">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs padding-18">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#home">
                                                        <i class="green ace-icon fa fa-user bigger-120"></i>
                                                        Profile
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content no-border padding-24">
                                                <div id="home" class="tab-pane in active">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-3 center">
                                                            <span class="profile-picture">
                                                               
                                                                <?php
                                                                    $photo=$_SESSION['photo'];
                                                                    echo "<img class='nav-user-photo' src='images/$photo' />";
                                                                ?>
                                                                
                                                            </span>

                                                            
                                                            
                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-9">
                                                            <h4 class="blue">
                                                                <span class="middle"><?php echo $_SESSION['txtaname'];?> </span>

                                                                
                                                            </h4>

                                                            <div class="profile-user-info">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Username :- </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?php echo $_SESSION['aname'];?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Mobile No :-</div>

                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-phone light-orange bigger-110"></i>
                                                                        <span><?php echo $_SESSION['mobileno'];?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">Email :-</div>

                                                                    <div class="profile-info-value">
                                                                        <span><?php echo $_SESSION['email'];?></span>
                                                                    </div>
                                                                </div>
                                                            </div>      
                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->
                                                </div><!-- /#home -->
                                            </div>
                                        </div>
</div>
                    </body>
<?php
    include("fff.php");
?>