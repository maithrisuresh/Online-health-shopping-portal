<<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	body
	{
		background-image:url("image/down.jpeg");
		background-repeat: no-repeat; 
		background-size: cover;
	}
	.container {
  width: 35%;
  padding-right: 5px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto;
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

.button2 {background-color: blue;
	font-size: 30px;
	text-align: center;} /* Blue */
.button3 {background-color: red;
	font-size: 30px;
	text-align: center;} /* Red */ 
.button4 {background-color: gray; color: black;
	font-size: 30px;
	text-align: center;} /* Gray */ 
.button5 {background-color: black;
	font-size: 30px;
	text-align: center;} /* Black */
</style>
</head>

<body>
<?php
$n=$_GET['name'];
?>

<div class="container">


<button class="btn btn-primary btn-lg" onclick="location.href='digestion.php';">DIGESTION PROBLEMS</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='hair_loss.php';">HAIRLOSS</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='kidneyproblems.php';">KIDNEY PROBLEMS</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='heartproblems.php';">HEART PROBLEMS</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='cold.php';">COLD</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='anxiety.php';">ANXIETY</button><br>
<button class="btn btn-primary btn-lg" onclick="location.href='bp.php';">REDUCE BLOOD PRESSURE</button><br>
<a href="dispcart.php?name=<?php echo $n?>"><font color-"blue">CLICK HERE TO VIEW CART</font></a>
</div>
</body>
</html>



