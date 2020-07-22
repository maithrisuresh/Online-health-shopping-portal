<<!DOCTYPE html>
<html>
<head>
	<title>registration page for customers</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body
	{
		background-color: orange;
	}
	input[type=text], input[type=password] ,input[type=number]{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
	.container {
  width: 25%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  background-color: yellow;
}
</style>
</head>
<body>
<form method="post">

<div class="container" >

<h1><font color="red">REGISTRATION</font></h1><br>
<label><font color="black">NAME</font></label><br>

<input type="text" name="name" placeholder="enter your name"><br>

<label><font color="black">AGE</font></label><br>

<input type="number" name="age" placeholder="enter your age"><br>

<label><font color="black">SEX</font></label><br>

<input type="radio" name="sex"<?php if (isset($sex) && $sex=="female")echo "checked";?>
value="female">female
<input type="radio" name="sex"<?php if (isset($sex) && $sex=="male")echo "checked";?>
value="male">male<br>


<label><font color="black">PHONE NUMBER</font></label><br>
<input type="number" name="pno" placeholder="enter your phno"><br>

<label><font color="black">ADDRESS</font></label><br>
<input type="text" name="address" placeholder="enter your adress"><br>


<label><font color="black">CREATE PASSWORD</font></label><br>
<input type="password" name="psw"><br>


<label><font color="black">CONFIRM PASSWORD</font></label><br>
<input type="password" name="cpsw"><br><br><br>


<input type="submit" name="SUBMIT" value="REGISTER">
</div>
</form>

<?php
include('db.php');

if(isset($_POST['SUBMIT']))
{
    if($_POST['psw'] != $_POST['cpsw'])
    {
	    echo "password not matching";
	    exit();

    }
	$n = $_POST['name'];
	$a = $_POST['age'];
	$g = $_POST['sex'];
	$p = $_POST['pno'];
	$d = $_POST['address'];

	$pas=$_POST['psw'];

	$qry = mysqli_query($con,"INSERT INTO `custreg`( `name`, `age`,`sex`,`pno`,`address`,`password`) VALUES ('$n','$a','$g','$p','$d','$pas')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo"
            <script>
		    alert('SUCCESSFULLY REGISTERED .');
		   window.location.href='login_customer.php';
		    </script>
		    ";
		}
		else
		{
			echo"
            <script>
		    alert('TRY AGAIN');
		    
		   window.location.href='registration_cust.php';
		    </script>
		    ";
		}
}
?>

</body>
</html>