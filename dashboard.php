<?php session_start(); 

include 'config.php';
$session=$_SESSION['name'];

if($_SESSION['mail']==''){?>
<script> window.location="login.php"</script>
<?php } ?>
<!DOCTYPE html>
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
<body>
    <!-- [ Pre-loader ] start -->
    <div class="preloader">
           <div class="preloader-bounce">
                <span></span>
               <span></span>
               <span></span>
               </div>
                
        </div>
	
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">

<?php

$sql=mysqli_query($con,"SELECT * FROM `profile_gastos` WHERE `log_name`='$session'");                    
while ($view = mysqli_fetch_array($sql)){ 
?>                                      
<img src="<?php echo 'assets/images/profile/'.$view['log_img'];?>" class='img-radius wid-70'>
<?php } ?>
                        
                        <div class="user-details">
							<div id="more-details"><?php echo $session; ?></div>
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
                                        
                                        <span><?php echo $session; ?></span>
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
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Welcome to <?php echo $session; ?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
				<div class="row">
                    <div class="col-sm-4">
							<div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">$145</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                                <div id="support-chart2"></div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Today Expenses</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-sm-4">
						 <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">$290</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart1"></div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Last Day Expenses</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-sm-4">
						 <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">$480</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf201;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart"></div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Last Week Expenses</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
					</div>
                    <div class="col-sm-4">
							<div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red">$145</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                                <div id="support-chart3"></div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Today Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-down text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-sm-4">
						 <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green">$290</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart4"></div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Last Day Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-sm-4">
						 <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue">$480</h4>
                                        <h6 class="text-muted m-b-0"></h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i style="font-size:24px" class="fa">&#xf155;</i>
                                    </div>
                                </div>
                            </div>
                             <div id="support-chart5"></div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Last Week Credits</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
					</div>
                    
                    
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
       
         
            <!-- prject ,team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Recent Activities</h5>
                        <div class="card-header-right">
                        </div>
                    </div>
                    
                            
<div class="collapse" id="collapseExample">  
                    
                    <div class="card-body">
                        <div class="latest-update-box">
<?php
$sql="SELECT * FROM `expense_gastos` ORDER BY `exp_date` DESC LIMIT 7";
$result = mysqli_query($con,$sql);
while($view= mysqli_fetch_assoc($result)){
?>
                            <div class="row p-t-40 p-b-50">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">
                                    
                                    <?php  echo $view['exp_date']; ?>
                                        
                                    </p>
                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>$<?php echo $view['exp_expense']; ?></h6>
                                    </a>
                                    <p class="text-muted m-b-0">
                                    <?php echo $view['exp_name']; ?>
                                    </p>
                                </div>
                            </div> 
<?php } ?>              
                            </div>
                    </div>
  
                    </div> 
  <div align="center"><span class="badge badge-danger" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:100px;">  Show </span>
           <br>         
<!--button class="badge badge-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width:100px;">Show more </button-->
                    </div>
                </div>
            </div>
            <!-- prject ,team member End -->
            
        
        
        
            <!-- seo start -->
            <div class="col-xl-4 col-md-12">
                <div class="card">
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                </div>
            </div>
            <!-- seo end -->

            <!-- Latest Customers start -->
            <div class="col-lg-8 col-md-12">
                <div class="card table-card review-card">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
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

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>


</html>
