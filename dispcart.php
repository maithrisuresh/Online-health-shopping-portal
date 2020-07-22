<<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body bgcolor="black">
<table id=t01 border="1">
	<thread>
	<tr>
    <th>itemid</th>
	<th>name</th>
	<th>cost</th>
	


</tr>
</thread>
<tbody>
<?php

$n=$_GET['name'];
include('db.php');







$sql=mysqli_query($con,"SELECT * FROM cart where cname='$n'");
	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
      
		<td>'.$res['iname'].'</td>
		<td>'.$res['cost'].'</td>
	    <td><a href="deletefromcart.php?id='.$res['cartid'].'">DELETE FROM CART<a></td>
        <td><a href="buy.php?id='.$res['cartid'].'" >CLICK HERE TO BUY THIS PRODUCT</a></td>
		</tr>
			 ';
			 
	}
	?>
	</tbody>
	</table>

<a href="disease_selection.php?name=<?php echo $n?>">CLICK HERE TO GO BACK</a>

	</body>
</html>