<?php
$conn = mysqli_connect("localhost","root","","image");
if(isset($_POST['sub']))
{
$v=$_FILES['file1']['name'];
$s=$_SERVER['DOCUMENT_ROOT']."/Gastos/picture/";
$a=move_uploaded_file($_FILES['file1']['tmp_name'],$s.'/'.$_FILES['file1']['name']);

$sql = "INSERT INTO `upload`(`img`) VALUES ($v')";
mysqli_query($conn,$sql);
echo "<script>alert('File Uploaded')</script>"; 
header("location:profile.php");
}
?>
