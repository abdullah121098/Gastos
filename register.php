<?php 
session_start(); 

include 'config.php';

if(isset($_POST['submit'])){


$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['password'];
$e=$_POST['confirm'];

//$f=md5($d);
//$g=md5($e);
    $check="SELECT * FROM `profile_gastos` WHERE `log_name` = '$a' OR `log_mail`='$a'";
    $run=mysqli_query($con,$check);
    
if(mysqli_num_rows($run)>0){
    ?><script>alert($a .'already exits !')</script><?php

    }
elseif($d != $e){?>
    <script>alert("passwords doesn't match")</script>
<?php
    }
    else{
        ?>
<script>alert("Successfull Added")</script>
<?php
    $sql = "INSERT INTO `profile_gastos`( `log_name`, `log_mail`, `log_mobile`, `log_pass`, `log_confirm`) VALUES ('$a','$b','$c','$d','$e')";
    $run1=mysqli_query($con,$sql);
        header('location:login.php');
}
}
?><!doctype html>
<html>
<head>
    <title>GASTOS-Track daily expenses | singup</title>
    <!-- Favicon  -->
    <link rel="icon" href="assets/images/GASTOS%20LOGO%20DESIGN%201.ico">
    <!-- ***** All CSS Files ***** -->
    <!-- Style css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body class="accounts">
    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="dashboard.php">
                     <img class="navbar-brand-regular" src="assets/images/logo1.png" style="width:15%;" alt="brand-logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-lg-7">
                        <div class="welcome-intro">
                            <h1 class="text-white">Create an account!</h1>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-5">
                        <!-- Contact Box -->
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                            <!-- Contact Form -->
                            <form action="register.php" id="contact-form" method="post">
                                <div class="contact-top">
                                    <h3 class="contact-title">Sign Up</h3>
                                    <h5 class="text-secondary fw-3 py-3">Fill all fields so we can get some info about you. We'll never send you spam</h5>
                                </div>
                              
<form action="#" method="post" name="gen">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                            </div>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                        </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                <input type="tel" class="form-control" name="phone" placeholder="Mobile" required="required" minlength="9" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" minlength="4" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" required="required" minlength="4" maxlength="10">
                </div>
            </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label contact-bottom" for="exampleCheck1" required>
                <span class="d-inline-block">By signing up, you accept our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></span></label>
                    </div>
            </div>
            <div class="col-12">
                <button class="btn btn-bordered w-100 mt-3 btn-primary" name="submit" type="submit">Sign Up</button>
            </div>
         <div class="col-12">
            <span class="d-block pt-2 mt-4 border-top">Already have an account? <a href="login.php">Sign In</a></span>
        </div>
    </div>
    </form> 

                            </form>
                        </div>
                    </div>
                </div>
            </div>
                       <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                    <title>GASTOS</title>
                    <desc>Expenses and Credits</desc>
                    <defs></defs>
                    <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                            <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->
    </div></body>
</html>

