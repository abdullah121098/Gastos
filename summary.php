<?php
  session_start();
include 'config.php';

$session=$_SESSION['name'];

if($_SESSION['mail']==''){?>
<script> window.location="login.php"</script>
<?php } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Summary</title>
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
    <style>
    [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
       padding: 10px;
  border-radius:10px;
        border-color: black;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */
label {
  display: block;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}
        select {
  width: 60%;
            border-color: black;
  padding:10px;
  border-radius:10px;
}
        .img1{
            height: 5%;
            width:5%;
            cursor: pointer;
        }
        
    </style>
</head>
    <body class="">
        
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
                                        <a href="login.php" class="dud-logout" title="Logout">
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
        </div>
   <div class="col-xl-12">
<form method="post">
<div class="row">
    <div class="col-sm-4">
        <input type="date" name="date1" id="date1"><br><br><br><br><br><br>
    <div align="center">
        <select name="item">
                <option>--Select--</option>
                <option value="Expense">Expenses</option>
                <option value="Credits">Credits</option>
        </select></div></div>
       <div style="padding-right: : 100px;margin-right: : 80px;"><label style="font-family:sans-serif;font-size:x-large">To</label></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div><input type="date" class="date2" name="date2" id="dateofbirth"></div>
            </div>
        <div> <br><br> 
<button type="submit" class="btn  btn-primary" name="summary" style="margin-left: 100px;width: 150px;font-size: large;">Submit</button></div>
 </form>               <br>               

<div class="container" id="table">    
<?php
if(isset($_POST['summary'])){
  $getselect=$_POST['item'];
  $a=date('Y-m-d',strtotime($_POST['date1']));
  $b=date('Y-m-d',strtotime($_POST['date2']));
echo'<h2 align="center">'.$getselect.'</h2>
<table class="table table-striped" id="save" >
<thead><tr><th>#</th><th>Description</th><th> Date</th>
    <th>Amount</th></tr></thead><tbody>';


    
    switch($getselect){
            
    case "Expense":
$query="SELECT * FROM `expense_gastos` WHERE `exp_date` BETWEEN '$a' AND '$b'";
$slq = mysqli_query($con, $query);
while($view1 = mysqli_fetch_array($slq)){ 
echo '<tr><td>'.$view1["exp_id"].'</td>
<td>'.$view1["exp_name"].'</td><td>'.$view1["exp_date"].'</td><td>'.$view1["exp_expense"].'</td></tr>';}
 break;
  case "Credits": 
$slq = mysqli_query($con,"SELECT * FROM `credit_gastos` WHERE `sn_date`BETWEEN '$a' AND '$b'");
while($view = mysqli_fetch_array($slq)){
echo '<tr><td>'.$view["sn_id"].'</td><td>'.$view["sn_name"].'</td><td>'.$view["sn_date"].'</td>
<td>'.$view["sn_credit"].'</td></tr>';}
        break;
    
    default:
        break;
    
} echo '</tbody></table>'; }
?>           
</div>    
    
    
<div class="col-sm-8">    
            <label style="font-family:sans-serif;font-size:x-large;margin-left: 200px;"><b><i>Export</i></b>&nbsp;&nbsp;
                
                <img src="assets/images/excel.png" id='excel' class="img1 dataExport" data-type="excel" value="XLS" style="width:70;">&nbsp;
                <img src="assets/images/download.jpg" class="img1" onclick="pdf('table')">
                </label>
            </div>
        </div>

        </div>
    </body>
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/plugins/apexcharts.min.js"></script>
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

    
    <!--- PDF PRINT --->    
<script>
function pdf(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}</script>    
<script src="//code.jquery.com/jquery.min.js"></script>

    <!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>

<script src="assets/js/tableExport/tableExport.js"></script>
<script type="text/javascript" src="assets/js/tableExport/jquery.base64.js"></script>
<script src="assets/js/jscode/export.js"></script>

</html>

