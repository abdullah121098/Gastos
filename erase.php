<?php
require 'config.php';
$id=$_GET['id'];

$lq=mysqli_query($con,"DELETE FROM `expense_gastos` WHERE `exp_id`='$id'");
?>
<script type="text/javascript">

window.location="Expenses.php";
</script>