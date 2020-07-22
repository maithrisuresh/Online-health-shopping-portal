<<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css">

	<title>HOME PAGE </title>
	 <script type = "text/javascript">
function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
        images[0] ="image/chamoline.jpeg"
        images[1]="image/papaya.jpeg"
        images[2]="image/rosemary.jpeg"
        images[3]="image/th.jpeg"
        image[4]="image/strawberry.jpeg"
        image[5]="image/pomegranate.jpeg"
          
        
      </script>
   
   
	<style>
	ul{
		list-style-type:none;
		margin: 20px;
		padding:10px;
		width:3000px;
		overflow:hidden;
		background-color: #333;


	}
	li{
		float:left;
	}
	li a
	{
		display :block;
		color: white;
		text-align: center;
		padding:14px 16px;
		text-decoration: none;
	}
	li a:hover
	{
		background-color: #111;


	}
	.image-div{
		float:left;
		margin-right:10px;
		max-width:100%;
		max-height: 100%;
		
	}
	.imgcontainer {
  width: 55%;
  padding-right: 5px;
  padding-left: 100px;
  margin-right: auto;
  margin-left: auto;


}
	</style>
	</head>
<body style="background-color:lightblue" onload = "startTimer()">
      

<h1 align="center" ><font size="10%">WELCOME TO ONLINE HEALTH PORTAL SYSTEM</font></h1> 
<ul>
<li><a  class="active" href="login_customer.php">CUSTOMER LOGIN</a></li>
<li><a href="admin_login.php">ADMIN LOGIN</a></li>

</ul>
<div class="imgcontainer">
 <img id="img" src="image/ginger.jpeg" height="600px" width="700px">
  </div>    






</body>
</html>