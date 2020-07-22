<!DOCTYPE html>
<html>
<head>
	<title> LOGIN ADMIN</title>
	 <link rel="stylesheet" href="bootstrap.css">
	<style>

body {
  background-image:url("image/b5.jpeg");
    background-repeat: no-repeat; 
    background-size: cover;
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
 <div class="imgcontainer">
    <img src="image/donor.jfif" alt="Avatar" class="avatar">
  </div>

<div class="container">
<form method="post">
<h1><font color="red">LOGIN FOR ADMIN</font></h1>
<label><font color="black">USERNAME</font></label>
<input type="text" name="name"><br>


<label><font color="black">PASSWORD</font></label>
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
	
   
	if($u=='admin' AND $pas=='admin')
	{
		  echo"
            <script>
		    alert('SUCCESSFULLY LOGGGED IN');
		   window.location.href='adminhome.php';
		    </script>
		    ";
		}
		else
		{
			echo"
			<script>;
			alert('incorrect password or username');
			window.location.href='login_customer.php';
			</script>;
			";

		}
}

?>

</body>
</html>