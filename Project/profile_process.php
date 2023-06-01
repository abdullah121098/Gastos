<?php
include'config.php';

if(isset($_POST['access'])){
    
    $a=$_POST['user']; $b=$_POST['mail']; $c=$_POST['phone']; 
$d=$_POST['address']; $e=$_POST['city']; $f=$_POST['loc'];
   $sql ="UPDATE `login_gastos` SET name`='$a',`email`='$b',`mobile`='$c',`address`='$d',`city`='$e',`location`='$f' WHERE` WHERE `name`='$a' OR `email`='$b'";
    $res=mysqli_query($con,$sql);
if($res){
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Profile Updated")</script>
<?php
    header("location:profile.php");
}else{
    ?>
<script>swal("Error! Update")</script>
<?php
header("location:profile.php");}
}
?>