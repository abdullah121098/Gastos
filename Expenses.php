<?php
session_start();

include 'config.php';
$session=$_SESSION['name'];

if($_SESSION['mail']==''){?>
<script> window.location="login.php"</script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Expenses</title>
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
    <style>
        .button {
        align-content: center;
  background-color:#1E90FF;
  border: none;
  color: white;
  padding: 26px;
  text-align: center;
  text-decoration: none;
  margin: 100px 100px;
    cursor: pointer;
        
}
    .button5 {border-radius: 90%;}
        .view {
  background-color: #1E90FF; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
            padding-right: 20px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.view2 {background-color: #1E90FF;} /* Blue */
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
.input1 {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
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
				</div> 
			</div><br><br>
                <div>
                    <center>
                    <button type="button" class="button button5" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" style="font-size:48px;color:white"></i></button>
                    <button class="view view2" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather mr-2 icon-check-circle"></i>View</button>
                        </center>
        </div>
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title h4" id="myLargeModalLabel">Display</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
<?php
$result = mysqli_query($con,"SELECT * FROM `expense_gastos`");
$count=mysqli_num_rows($result);                                     
 if($count){ echo '
			<div class="modal-body">
					<div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <!--tr><td colspan="5"></td>
<input type="submit" name="minus" value="Delecct" onclick="return confirm("Are you sure?")" class="btn btn-danger"></tr>
<tr><th><input type="checkbox" id="checkAll"> </th-->
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Expense</th>
                                        <th colspan="2">operation </th>
                                    </tr>
                                </thead>
                                <tbody>';
 
while($view = mysqli_fetch_array($result)) { ?><tr>
<tr>
<!--td><input type="checkbox" class="checkitem" value="<?php //echo $row['id']; ?>" name="id[]">  </td-->
<td><?php echo $view['exp_id']; ?></td>    
<td><input type="text" name="na" value="<?php echo $view['exp_name']; ?>"></td>
<td><input type="text" name="da" value="<?php echo $view['exp_date']; ?>"></td>    
<td><input type="text" name="ex" value="<?php echo $view['exp_expense']; ?>" size="6"></td>

<td>
<div class="btn-group">
<a href="update.php?id=<?php echo $view['exp_id']; ?>">    
    <button type="button" name="edit" class="btn btn-warning" size="4">+</button></a>
<a href="erase.php?id=<?php echo $view['exp_id']; ?>">
<button type="button" class="btn btn-danger" size="4">X</button></a>
    </div>    </td>
<?php } echo '</tbody> </table> </div> </div>  </div>'; }  
?>                       
								</div>
							</div>
						</div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5  id="exampleModalLabel">Add</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
								
                                    
         <div class="modal-body">
<form method="post" action="#">
                    <div class="form-group">
         <input type="date" class="date1" class="input1" name="dateofbirth" id="dateofbirth">
         <label for="recipient-name" class="col-form-label">Amount</label>
        <input type="text" name="amount" class="form-control" >
                    </div>
              <div class="form-group">
         <label for="message-text" class="col-form-label">Description:</label>
        <textarea class="form-control" id="message-text" name="texted"></textarea>
                </div>
        <div class="form-group">
            <button type="submit" class="btn  btn-secondary"  name="add"> ADD</button></div>
</form>
                                    </div>
								</div>
							</div>
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

    <script>
	$('#exampleModal').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text('New message to ' + recipient)
		modal.find('.modal-body input').val(recipient)
	})
</script>
    <script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</html>

<?php
if(isset($_POST['add'])){
    $money= $_POST['amount'];
  $date=date('Y-m-d',strtotime($_POST['dateofbirth']));
    $detail=$_POST['texted'];    
$sql1="INSERT INTO `expense_gastos`(`exp_name`, `exp_date`, `exp_expense`) VALUES ('$detail','$date','$money')";
$result1 = mysqli_query($con,$sql1);
if($result1){
?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Expenses Added! "); 
setTimeout(function(){
    window.location.href='Expenses.php';},2000);
</script>
<?php
     
}else{
    ?>
<script>swal("Error Add!");   setTimeout(function(){  window.location.href='Expenses.php';},2000);</script>
<?php
} }
?>
