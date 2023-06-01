<?php
include 'config.php';

$id=$_GET['id'];?>
<table class="table"><thead><tr><th>#</th><th>Amount</th>
<th>Description</th><th>Date </th><th colspan="2">Operation</th></tr>
</thead><tbody>
<?php
$sq=mysqli_query($con,"SELECT * FROM `expense_gastos` WHERE `exp_id`='$id' ");
if(mysqli_num_rows($sq)){
while($r=mysqli_fetch_assoc($sq)){?>

    <tr><td><?php echo $row["exp_id"]; ?></td>
    <td><?php echo $row["exp_name"]; ?></td>
    <td><?php echo $row["exp_expense"]; ?></td>
    <td><?php echo $row["exp_date"]; ?></td>
    <td><button data-id="<?php echo $row['exp_id'];?>" name='edit' class='btn btn-warning'>+</button></td>

<?php
}
}
    
$da=$_POST['date']; $txt=$_POST['texted']; $ru=$_POST['amount'];                           

$lq=mysqli_query($con,"UPDATE `expense_gastos` SET `exp_name`='$txt',`exp_date`='$da',`exp_expense`='$ru' WHERE `exp_id`='$id'");
    header("location:Expenses.php");
?>
<!--script type="text/javascript">

window.location="../view/Expenses.php";
</script-->
