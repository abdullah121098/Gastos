<?php
include 'config.php';
if(isset($_POST['submit'])){
$a=$_POST['user'];
$b=$_POST['mail'];
$c=$_POST['phone'];
$d=$_POST['pass'];
$e=$_POST['confirm'];

 // $f = md5($e);
  //$g = md5($d);

    
$check="SELECT * FROM `login_gastos` WHERE `name`= '$a'";
    $run=mysqli_query($con,$check);
       if(mysqli_num_rows($run)>0){
?>
      <script>alert('Name already exist')</script>
<?php           
        header("location:register.php");}    
$check1="SELECT * FROM `login_gastos` WHERE `email`= '$b'";
$run1=mysqli_query($con,$check1);
       if(mysqli_num_rows($run1)>0){
           
?>
      <script>alert('Email already exist')</script>
<?php 
     header("location:register.php");  }
elseif($d != $e){?>
    <script>alert("passwords doesn't match")</script>
<?php
header("location:register.php");    }
    else{
        ?>
<script>alert("Successfull Added")</script>
<?php
    $sql = "INSERT INTO `login_gastos`(`name`, `email`, `mobile`, `password`, `repeatpass`) VALUES ('$a','$b','$c','$d','$e')";
    mysqli_query($con,$sql);
    header("location:index.php");    
        
    } 
}