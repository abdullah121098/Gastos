<?php
session_start();

include 'config.php';

$session=$_SESSION['name'];
$session1=$_SESSION['mail'];
$session2=$_SESSION['phone'];
$session3=$_SESSION['city'];



if($_SESSION['mail']==''){?>
<script> window.location="login.php"</script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
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

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/spinner.css" type="text/css"/>

</head>
<body>
    <div class="preloader">
           <div class="preloader-bounce">
                <span></span>
               <span></span>
               <span></span>
               </div>
                
        </div>

    <nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
              
<?php

$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){ 
?>                                      
<img src="<?php echo 'assets/images/profile/'.$view['log_img'];?>" class='img-radius wid-70'
title="<?php echo $session; echo $session1; echo $session2; echo $session3; ?>">
<?php } ?>              
                        <div class="user-details">
							<div id="more-details"><?php echo $session;?></div>
						</div>
					</div>
					
				</div><br><br><br>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item">
					    <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="Expenses.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Expenses</span></a>
					</li>
                    <li class="nav-item pcoded-hasmenu">
					    <a href="credits.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Credits</span></a>
					</li>
                     <li class="nav-item pcoded-hasmenu">
					    <a href="summary.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Summary</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo1.png" alt="" class="logo" height="150px">
						<!--img src="assets/images/logo1.png" alt="" class="logo-thumb"!-->
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
<?php

$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){ 
?>                                      
<img src="<?php echo 'assets/images/profile/'.$view['log_img'];?>" class='img-radius wid-70'>
<?php } ?>
                                <span><?php echo $session;?></span>
										<a href="logout.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                                        <li><a href="logout.php" class="dropdown-item"><i class="feather icon-log-out"></i>Log Out</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
	</header>
	<!-- [ Header ] end -->
    <div class="pcoded-main-container">
    <div class="pcoded-content">
         <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Welcome to <?php echo $session;?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-10">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body p-0"></div>
                            <div class="card-header">
                                <h3><?php echo $session;?></h3>
                                <div style="float:right"> 
                                    
<form action="#" method="post" enctype="multipart/form-data">
<?php

$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){
    
?>                                      
<img src="<?php echo 'assets/images/profile/'.$view['log_img'];?>" id="imgFile" alt="Choose image" class="img-radius wid-90" data-bs-toggle="modal" data-bs-target="#exampleModal1" 
style="cursor: pointer;">    
<?php } ?>
</form>

<!-- Modal image start-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5></div>
<form method="post" action="#" enctype="multipart/form-data">
      <div class="modal-body">                                
        <div class="form-group col-md-6">
       <input type="file" name="img_file" id="Upload">
       <input type="submit" name="sub" value="Upload"><br>
<?php     

            if(isset($_POST['sub']))
{
                $img_name = $_FILES['img_file']['name'];
                $tmp_name = $_FILES['img_file']['tmp_name'];
                $folder='assets/images/profile/';
                $move = move_uploaded_file($tmp_name,$folder.$img_name);

                $sql="UPDATE `profile_gastos` SET `log_img`='$img_name' WHERE `log_name`='$session'";
                $query=mysqli_query($con,$sql);
                  
              if($query){?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Profile Updated "); 
         setTimeout(function(){
    window.location.href='profile.php';},1500);</script>
                <?php
                }else{?>
<script>window.location.href='profile.php';</script>
                <?php
              }    } ?>          
            
          </div>
          </div>                                
    </form>
      </div>
    </div></div>

        <!-- end of modal image  -->
                                    
                                    
                            <!-- Start modal Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>                    <!-- End modal Script -->            
                                    
                                    </div>
                            </div><br>
                                <div class="card-header-right">
                                        <div class="d-inline-block">
                                           <h6 style="margin-right: 50px" data-bs-toggle="modal" data-bs-target="#exampleModal">About</h6>
                                            <p class="text-muted m-b-0"></p>
                                        </div>
                                </div>
                            
<!-- Modal Profile Detail -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5></div>

<?php

$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){ 
?>                    
        
    <form method="post" action="#" enctype="multipart/form-data">
      <div class="modal-body"><center>
        <img src="<?php echo 'assets/images/profile/'.$view['log_img'];?>" class='img-radius' style='width:25%;'>
</center><br>
                <label for="inputEmail4">Username:</label><center>
          <?php echo $view['log_name']; ?></center><br>
                    <label for="inputAddress">Mobile No:</label><center>
<?php echo $view['log_mobile']; ?></center><br>
                    <label for="inputEmail4">Email:</label><center>
<?php echo $view['log_mail']; ?></center><br>
                <label for="inputAddress">Address:</label><center>
<?php echo $view['log_address']; ?></center><br>
                    <label for="inputCity">City:</label><center>
<?php echo $view['log_country']; ?></center><br>
                        <label for="inputState">Country:</label><center>
<?php echo $view['log_location']; ?></center>
            </div>   
        
    </form>
<?php } ?>
    </div></div></div></div>                            
                            
                            
                        </div>
                    </div>
                    
                </div>
               

            </div>
            </div>
                    <div class="col-xl-12 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Profile Detail</h5>
                    </div>
                    
<?php
     
$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){ 
?>                    
                    
                    <div class="card-body">
                            <form method="post" action="#">
                                
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Username</label>
                                    <input type="text" class="form-control" id="inputEmail4" value="<?php echo $view['log_name']; ?>" name="user">
                                </div>
                                 <div class="form-group col-md-6">
                                <label for="inputAddress">Mobile No</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?php echo $view['log_mobile']; ?>" name="phone">                                </div>
                            </div>
                                <div class="form-group">

                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" value="<?php echo $view['log_mail']; ?>" name="mail">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?php echo $view['log_address']; ?>" name="address">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity"
                                    value="<?php echo $view['log_country']; ?>" name="city">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Country</label>
                                    <input type="text" class="form-control" id="inputCity"
                                    value="<?php echo $view['log_location']; ?>" name="loc">
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary" name="update"> update</button>
                        </form>
                        </div>
<?php } ?>
                    </div>
                </div>
        </div>

    </body>
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    
    <script src="assets/js/pcoded.min.js"></script>
    <script>$(window).on('load', function() {
            $('.preloader').fadeOut();
            $('.animated-row').each(function() {
                var $this = $(this);
                $this.find('.animate').each(function(i) {
                    var $item = $(this);
                    var animation = $item.data('animate');
                    $item.on('inview', function(event, isInView) {
                        if (isInView) {
                            setTimeout(function() {
                                $item.addClass('animated ' + animation).removeClass('animate');
                            }, i * 50);
                        } else if (!screencheck(767)) {
                            $item.removeClass('animated ' + animation).addClass('animate');
                        }
                    });
                });
            });
            
        });</script>
</html>



<?php
include'config.php';

if(isset($_POST['update'])){
    
$a=$_POST['user']; $b=$_POST['mail']; $c=$_POST['phone']; 
$d=$_POST['address']; $e=$_POST['city']; $f=$_POST['loc'];
   $sql ="UPDATE `profile_gastos` SET `log_name`='$a',`log_mail`='$b',`log_mobile`='$c',`log_address`='$d',`log_country`='$e',`log_location`='$f' WHERE `log_name`='$a'AND `log_mail`='$b'";
    $res=mysqli_query($con,$sql);
if($res){ ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Profile Updated Succesfull");
setTimeout(function(){
    window.location.href='profile.php';},1500);

</script>
                <?php 
                }else{?>
<script>swal(" Update Failed ")</script>
                <?php
                    echo '<br> images Not upload into database';
                }
}
  ?>