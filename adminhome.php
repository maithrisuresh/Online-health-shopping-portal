<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.css">
	<style>
	body
	{
		background-image:url("image/b6.jpeg");
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
	.button6 {background-color: pink;
	font-size: 30px;
	text-align: center;} /* Black */

</style>
</head>
<body>

</head>
<body>
<div class="container">
<button class="button"  onclick="location.href='additem.php';">ADD ITEM</button><br>
<button class="button button2" onclick="location.href='viewcustomerdetails.php';">CUSTOMER DETAILS</button><br>

<button class="button button3" onclick="location.href='availableitems.php';">ITEM DETAILS</button><br>
<button class="button button4" onclick="location.href='vieworders.php';">ORDER DETAILS</button><br>
<button class="button button5" onclick="location.href='home.php';">BACK</button><br>

</div>
</body>
</html>



