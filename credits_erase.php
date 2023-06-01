<?php
require 'config.php';

$id=$_GET['id'];

$lq=mysqli_query($con,"DELETE FROM `credit_gastos` WHERE `sn_id`='$id'");
?>
<script type="text/javascript">

window.location="credits.php";
</script>