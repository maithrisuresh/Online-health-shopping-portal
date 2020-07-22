<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style type="text/css">
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: lightpink;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-size: 30px;
}
</style>

</head>
<body bgcolor="grey">
<hr>
<table id=t01 border="1">
	<thread>
	<tr>
    <th>ID</th>
	<th>cname</th>
	<th>address</th>
	<th>itemname</th>
	<th>cost</th>
	<th>qty</th>


</tr>
</thread>

<label><font size="5%">YOUR ORDER DETAILS</font></label>
<tbody>
<?php
$i=$_GET['id'];

include('db.php');
$q=mysqli_query($con,"SELECT * FROM cart where cartid='$i'");
while($res=mysqli_fetch_array($q))
	{
       $cn=$res['cname'];
       $it=$res['iname'];
   }



$qry=mysqli_query($con,"SELECT * FROM orderdetails where cname='$cn' and itemname='$it'");
while($res=mysqli_fetch_array($qry))
	{
		echo'
		<tr>
        <td>'.$res['orderid'].'</td>
		<td>'.$res['cname'].'</td>
		<td>'.$res['address'].'</td>
		<td>'.$res['itemname'].'</td>
		<td>'.$res['cost'].'</td>
		<td>'.$res['qty'].'</td>
	
	
		</tr>
			 ';
	}
	echo"
	<h1>ORDER PLACED SUCCESSFULLY . WILL BE DELIVERED IN 2-3 DAYS </h1>
	";
	?>

</tbody>
</table>

<button  class="button" onclick="location.href='home.php'";>HOME</button><br>
<a href="disease_selection.php?name=<?php echo $cn?>">CLICK HERE TO GO BACK</a>
</body>

</body>
</html>