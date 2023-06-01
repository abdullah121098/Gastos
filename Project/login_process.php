<?php
session_start();

require_once('config.php');

$a=$_POST['email'];
$b=$_POST['password'];
//$c=md5($b);


if($_POST['access']){
    if(empty($_POST['email'])||empty($_POST['password'])){
        header("location:login.php? Empty= Please Fill the  Blank");
    }else{
        $ql="SELECT * FROM `login_gastos` WHERE `name`='$a' OR `email`='$a' AND `password`='$b'";
        $run=mysqli_query($con,$ql);
        if($r=mysqli_fetch_assoc($run)){
            $_SESSION['name']=$r['name'];
            $_SESSION['mail']=$r['email'];
            
            header("location:dashboard.php");
        }else{ header("location:login.php? Invalid= Please enter correct user name/password");
             }
    }
}else{
    echo 'not yet working';
}

?>