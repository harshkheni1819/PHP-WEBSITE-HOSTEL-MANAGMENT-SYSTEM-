<?php
session_start();
include('connect.php');
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="l.jpg" type="image/png">
    <title>AASHRAY STAY</title>

    <link rel="stylesheet" href="css\r.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</head>

<body>

    <link href='https://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>

    <div id="fback">
        <div class="girisback"></div>
        <div class="kayitback"></div>
    </div>

    <div id="textbox">
        <div class="toplam">

            <div class="left">
                <div id="ic">
                    <h2>Sign Up</h2>
                    <?php
                    if (isset($_POST['btnins'])) {
                        if (!empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['mobileno']) && !empty($_POST['birthdate']) && !empty($_POST['purpose'])) {
                            $uname = mysqli_real_escape_string($con, $_POST['uname']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $password = mysqli_real_escape_string($con, $_POST['password']);
                            $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
                            $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
                            $purpose = mysqli_real_escape_string($con, $_POST['purpose']);

                            $query = "INSERT INTO user_master (uname, email, password, mobileno, birthdate, purpose, status) 
                                      VALUES ('$uname', '$email', '$password', '$mobileno', '$birthdate', '$purpose', 0)";
                            $q = mysqli_query($con, $query);

                            if ($q) {
                                $_SESSION['uname'] = $uname;
                                $_SESSION['email'] = $email;
                                $_SESSION['mobileno'] = $mobileno;

                                $_SESSION['email'] = $email; // Store email in session
                                header('location: sendmail.php');
                                exit();

                            } else {
                                echo "<script>alert('Error inserting data');</script>";
                            }
                        } else {
                            echo "<script>alert('All fields are required');</script>";
                        }
                    }
                    ?>

                    <form id="girisyap" name="signup_form" method="post">
                        <div class="yarim form-group">
                            <label class="control-label">Username</label>
                            <input type="text" name="uname" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Mobile No</label>
                            <input type="text" name="mobileno" class="form-control" pattern="^[0-9]{10}$" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Purpose</label>
                            <input type="text" name="purpose" class="form-control" required>
                        </div>

                        <button type="submit" name="btnins" class="girisbtn">Sign Up</button>
                    </form>
                    <button id="moveright">Login</button>
                </div>
            </div>

            <div class="right">
                <div id="ic">
                    <h2>Login</h2>
                    <?php
                    if (isset($_POST['btnlogin'])) {
                        if (!empty($_POST['uname']) && !empty($_POST['password'])) {
                            $uname = mysqli_real_escape_string($con, $_POST['uname']);
                            $password = mysqli_real_escape_string($con, $_POST['password']);

                            $query = "SELECT * FROM user_master WHERE uname='$uname' AND password='$password'";
                            $q = mysqli_query($con, $query);

                            if ($q && mysqli_num_rows($q) > 0) {
                                $row = mysqli_fetch_assoc($q);
                                $_SESSION['uid'] = $row['uid'];
                                $_SESSION['uname'] = $row['uname'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['mobileno'] = $row['mobileno'];
                                $_SESSION['loggedin'] = true;

                                header('location:index.php');
                                exit();
                            } else {
                                echo "<script>alert('Invalid username or password');</script>";
                            }
                        } else {
                            echo "<script>alert('Username and password are required');</script>";
                        }
                    }
                    ?>

                    <form id="uuu" name="login-form" method="post">
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" name="uname" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label" >Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <br>
                        <div>
                            <a href="forgotpassword.php">
                                <i class="ace-icon fa fa-key"></i>
                                I Forgot my Password
                            </a>
                        </div>
                        <br>
                        <button type="submit" name="btnlogin"  id="moveright">Login</button>
                    </form>

                    <button id="moveleft">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $('#moveleft').click(function () {
            $('#textbox').animate({ 'marginLeft': "0" });
            $('.toplam').animate({ 'marginLeft': "100%" });
        });

        $('#moveright').click(function () {
            $('#textbox').animate({ 'marginLeft': "50%" });
            $('.toplam').animate({ 'marginLeft': "0" });
        });
    </script>

</body>
</html>