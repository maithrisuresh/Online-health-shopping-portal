<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body
	{
		background-image:url("image/b11.jpeg");
		background-repeat: no-repeat; 
		background-size: cover;
	}
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
  background-color: lightblue;
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
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  width: 35%;
  padding-right: 5px;
  padding-left: 200px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 35%;
  padding-right: 5px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto;
  background-color: lightblue;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#form_login{
  display: inline-block;
  text-align: center;
  vertical-align: middle;
}
</style>
</head>
<body>
<form method="post">
<div class="container">
<label><font  size="5%" color="black">QUANTTITY</font></label><br>

<input type="number" name="qty" placeholder="enter quantity in kg"><br>
<input type="submit" name="SUBMIT" value="CLICK">
</div>
</form>
<table id=t01 border="1">
	<thread>
	<tr>
    <th>ID</th>
	<th>name</th>
	<th>age</th>
	<th>sex</th>
	<th>pno</th>
	<th>address</th>


</tr>
</thread>
<tbody>

<?php
$id=$_GET['id'];
include('db.php');

if(isset($_POST['SUBMIT']))
{
$quan=$_POST['qty'];
$sql=mysqli_query($con,"SELECT * FROM cart where cartid='$id'");
	while($res=mysqli_fetch_array($sql))
	{
$name=$res['cname'];
$cost=$res['cost'];
$item=$res['iname'];

}




	

echo "<h1>YOUR DETAILS</h1><br>";

	$qry=mysqli_query($con,"SELECT * FROM custreg where name='$name'");
	while($res1=mysqli_fetch_array($qry))
	{
		echo'
		<tr>
        <td>'.$res1['id'].'</td>
		<td>'.$res1['name'].'</td>
		<td>'.$res1['age'].'</td>
		<td>'.$res1['sex'].'</td>
		<td>'.$res1['pno'].'</td>
		<td>'.$res1['address'].'</td>
	
	
		</tr>
			 ';
			 $a=$res1['address'];
	}
	$totcost=$quan*$cost;
echo "<h1>The total cost is $totcost</h1><br>";








$sqlqry=mysqli_query($con,"INSERT INTO `orderdetails`( `cname`, `address`, `itemname`, `cost`, `qty`) VALUES ('$name','$a','$item','$totcost','$quan')")or die(mysqli_error($con)); 

$qry1=mysqli_query($con,"SELECT orderid FROM orderdetails where cname='$name' and itemname='$item'");
while($res1=mysqli_fetch_array($qry))
{
	$id=$res['orderid'];
}

}
?>
</tbody>
</table>
<button  class="button" onclick="location.href='confirmorder.php?id=<?php echo $id ?>'";>PRESS HERE TO CONFIRM ORDER</button><br>
<button  class="button" onclick="location.href='home.php'";>PRESS HERE TO GO BACK</button><br>


</body>
</html>