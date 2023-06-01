<?php
session_start();
require_once('config.php');
?><?php
if(isset($_POST['access'])){
$a=$_POST['email'];
$b=$_POST['password'];
//$c=md5($b);

    if(empty($_POST['email'])||empty($_POST['password'])){
        header("location:login.php? Empty= Please Fill the  Blank");
    }else{
        $username=mysqli_escape_string($con,$a);
        $password=mysqli_escape_string($con,$b);
        $ql="SELECT * FROM `profile_gastos` WHERE `log_name`='$a' OR `log_mail`='$a' AND `log_pass`='$b'";
        $run=mysqli_query($con,$ql);
        if($r=mysqli_fetch_assoc($run)){
            
            $_SESSION['id']=$r['log_id'];
            $_SESSION['name']=$r['log_name'];
            $_SESSION['mail']=$r['log_mail'];
            $_SESSION['phone']=$r['log_mobile'];
            $_SESSION['address']=$r['log_addres'];
            $_SESSION['image']=$r['log_img'];
            $_SESSION['country']=$r['log_location'];
            $_SESSION['city']=$r['log_country'];
            
            header("location:dashboard.php");
        }else{
    header("location:login.php? Invalid= Please enter correct user name/password");}
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Gastos</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/GASTOS%20LOGO%20DESIGN%201.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/css/spinner.css" type="text/css"/>
    

</head>
<body class="homepage-5 accounts">

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
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
                            <h1 class="text-white">Welcome back!</h1>                            
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-8 col-lg-5">
                        <!-- Contact Box -->
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                            <!-- Contact Form -->
                            <form id="contact-form" method="post" action="#">
                                <div class="contact-top">
                                    <h3 class="contact-title">Sign In</h3>
                                    <h5 class="text-secondary fw-3 py-3">Fill all fields so we can get some info about you. We'll never send you spam</h5>
                                </div>
<?php if(@$_GET['Empty']==true){
?><div class="alert-light text-danger text-center my-3"><?php echo $_GET['Empty'] ?></div>
<?php } ?>
<?php if(@$_GET['Invalid']==true){
?><div class="alert-light text-danger text-center my-3"><?php echo $_GET['Invalid'] ?></div>
<?php } ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                              </div>
                                              <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                              </div>
                                              <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!--input type="submit" name="access" class="btn btn-primary" value="Sign In"-->
                                    
                                        <input class="btn btn-bordered w-100 mt-3 btn-primary" type="submit" name="access" value="Sign In">
                                        
                                        
                                        <div class="contact-bottom">
                                            <span class="d-inline-block mt-3">By signing up, you accept our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        
                                        <span class="d-block pt-2 mt-4 border-top">Don't have an account? <a href="register.php">Sign Up</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ***** Welcome Area End ***** -->
    </div>
</body>
</html>

