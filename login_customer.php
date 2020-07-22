<!DOCTYPE html>
<html lang="en">
<head>
	<title> LOGIN CUSTOMER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	<style>

body {
  background-image:url("image/b3.jpg");
    background-repeat: no-repeat; 
    background-size: cover;
}
input [type=submit]
{
  width:50%;
  color:red;
}
input[type=text], input[type=password] {
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
  padding-left: 150px;
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
<div class="imgcontainer">
    <img src="image/donor.jfif"  alt="Avatar" class="img-thumbnail">
  </div>

<div class="container">
<h1><font size="5%" color="black" align="center">LOGIN FOR CUSTOMER</font></h1>
<label><font  size="5%" color="black">USERNAME</font></label>
<input type="text" name="name"><br>


<label><font size="5%" color="black">PASSWORD</font></label>
<input type="password" name="psw"><br>

<input type="submit" name="SUBMIT" value="LOGIN"><br>
</div>
</form>
<?php
include('db.php');
if(isset($_POST['SUBMIT']))
{

	$u = $_POST['name'];
	$pas = $_POST['psw'];
	$sql=mysqli_query($con,"SELECT * FROM custreg");
	while($res=mysqli_fetch_array($sql))
	{
	$username=$res['name'];
	$password=$res['password'];


   
	if($u==$username AND $pas==$password)
	{
		  echo"
            <script>
		    alert('SUCCESSFULLY LOGGGED IN');
		   window.location.href='disease_selection.php?name=$username';
		    </script>
		    ";
        exit();
		}
	}
			echo"
			<script>;
			alert('incorrect password or username');
			window.location.href='login_customer.php';
			</script>;
			";

	

}
?>
<button onclick="location.href='registration_cust.php';"><font size=200px>NEW Customer CLICK HERE</font></button><br>
</body>
</html>