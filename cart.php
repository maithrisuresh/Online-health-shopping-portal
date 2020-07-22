<<!DOCTYPE html>
<html>
<head>
	<title>MY CART</title>
</head>
<body>



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
  background-color: lightgreen;

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
<body bgcolor="powderblue">
<form method="post">
<div class="container">
<label><font size="5%" color="black">NAME</font></label><br>

<input type="text" name="name" placeholder="enter your name"><br>
<input type="submit" name="SUBMIT" value="VIEW CART">
</div>
</form>
<hr>

<table id=t01 border="1">
	<thread>
	<tr>
	<th>name</th>
	<th>cost</th>
	


</tr>
</thread>
<tbody>
	<?php
if(isset($_GET['id']) && $_GET['id']!== ''){
$id=$_GET['id'];
}

include('db.php');

if(isset($_POST['SUBMIT']))
{
   
	$n = $_POST['name'];
	$sqll=mysqli_query($con,"SELECT * FROM additem where itemid='$id' ");
	while($resu=mysqli_fetch_array($sqll))
	{
		$id=$resu['itemid'];
	$i=$resu['name'];
	$c=$resu['cost'];
}
$qry=mysqli_query($con,"INSERT INTO `cart`( `itemid`,`cname`, `iname`,`cost`) VALUES ('$id','$n','$i','$c')")or die(mysqli_error($con));
if($qry!=true)
{
	echo"
            <script>
		    alert('ERROR IN LOADING ');
		   window.location.href='disease_selection.php';
		    </script>
		    ";
}
else
{

	$sql=mysqli_query($con,"SELECT * FROM cart where cname='$n'");
	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
      
		<td>'.$res['iname'].'</td>
		<td>'.$res['cost'].'</td>
	    <td><a href="deletefromcart.php?id='.$res['cartid'].'" >REMOVE FROM CART</a></td>
        <td><a href="buy.php?id='.$res['cartid'].'" >CLICK HERE TO BUY THIS PRODUCT</a></td>
        <td><a href="disease_selection.php?name=<?php echo $n?>">CLICK HERE TO GO BACK</a></td>
		</tr>
			 ';
			 $c=$res['cartid'];
	}
}

}
	
	?>

</tbody>
</table>

</body>
</html>