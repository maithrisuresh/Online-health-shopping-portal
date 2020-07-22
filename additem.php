<<!DOCTYPE html>
<html>
<head>
	<title>ADD ITEM</title>
<style>
body {
  background-image:url("image/b4.jpeg");
    background-repeat: no-repeat; 
    background-size: cover;
}
input [type=submit]
{
  width:50%;
  color:red;
}
input[type=text], input[type=password] ,input[type=number] {
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
	.container {
  width: 25%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  background-color: white;

}
</style>
</head>
<body>
<form method="post">

<div class="container" >

<h1><font color="blue">ITEM</font></h1>
<label><font  size="5%" color="black">NAME</font></label><br>

<input type="text" name="name" placeholder="enter item name"><br>

<label><font  size="5%" color="black">COST FOR 1 KG</font></label><br>

<input type="number" name="cost" placeholder="enter cost"><br>



<input type="submit" name="SUBMIT" value="ADD">
</div>
</form>

<?php
include('db.php');

if(isset($_POST['SUBMIT']))
{
    
	$n = $_POST['name'];
	$c = $_POST['cost'];


	

	$qry = mysqli_query($con,"INSERT INTO `additem`( `name`, `cost`) VALUES ('$n','$c')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo"
            <script>
		    alert('SUCCESSFULLY ADDED .');
		      window.location.href='adminhome.php';
		    </script>
		    ";
		}
		else
		{
			echo"
            <script>
		    alert('SORRY. TRY AGAIN');
		    window.location.href='additem.php';
		   
		    </script>
		    ";
		}
}
?>

</body>
</html>