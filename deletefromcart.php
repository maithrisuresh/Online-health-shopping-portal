<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('db.php');
$id=$_GET['id'];

$qry=mysqli_query($con,"SELECT cname FROM cart WHERE cartid='$id' ");
while($res=mysqli_fetch_array($qry))
{
	$n=$res['cname'];
}



$sql = mysqli_query($con,"DELETE FROM cart WHERE cartid='$id'");
if($sql==true)
{
echo"
    <script>
	alert('SUCCESSFULLY DELETED.');
    window.location.href='dispcart.php?name=$n';
	</script>
		    	";}
else
{
echo"
    <script>
	alert('TRY AGAIN');
   window.location.href='javascript:history.back()'
	</script>
		    	";
		    	}
?>

</body>
</html>