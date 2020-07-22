<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('db.php');
$o=$_GET['id'];




$sql = mysqli_query($con,"DELETE FROM `orderdetails` WHERE orderid='$o'");

$qry=mysqli_query($con,"SELECT cname,itemname from orderdetails where orderid='$o'");
while($res=mysqli_fetch_array($qry))
{
	$n=$res['cname'];
	$i=$res['itemname'];
}
$sql1=mysqli_query($con,"DELETE FROM `cart` WHERE cname='$n' and iname='$i'");
echo"
    <script>
	alert('SUCCESSFULLY sent ');
    window.location.href= 'vieworders.php';
	</script>
		    	";
?>
</body>
</html>