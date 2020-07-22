<!DOCTYPE html>
<html>
<head>
	<title>DIGESTION RELIEF</title>
  <style>
  body
  {
    background-color: powderblue;
  }
  .imgcontainer {
  width: 70%;
  height: 50%;
  padding-right: 5px;
  padding-left: 200px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 55%;
  padding-right: 5px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto;
  border: 5px solid;
background-color: lightgreen;


}
p.a {
  
   font-variant: small-caps;
   font-weight: bold;
   font-size: 30px;
   font-color:pink;


</style>
</head>
<body>


<form method="post">

<div class="container">
<div class="imgcontainer">
    <img src="image/pomegranate.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
Like green tea, pomegranate juice has been consumed for centuries, with the belief that the ruby red fruit promotes health. Modern scientists prove this belief in this studyTrusted Source. Powerful antioxidant chemicals in pomegranate fruit and juice may help reverse atherosclerosis and lower blood pressure.



</p><br>
<br>
<br>
<?php
include('db.php');
$p="pomegranate";
$sql=mysqli_query($con,"SELECT itemid,cost FROM additem where name='$p'");
while($res=mysqli_fetch_array($sql))
  {
    $id=$res['itemid'];
  $cost=$res['cost'];

  }
echo "<h1>THE COST IS $cost</h1><br>";
?>
  <a href="cart.php?id=<?php echo $id;?>"><font size="5%">CLICK HERE TO ADD TO CART</font></a><br><br>
</div>
<br>






<div class="container">
<div class="imgcontainer">
    <img src="image/brocoli.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">
Compound in Broccoli Sprouts May Fight Heart Disease. From the WebMD Archives. April 28, 2004 -- A powerful antioxidant found in broccoli and broccoli sprouts may help protect the heart from high blood pressure, heart disease, and stroke.

<?php
include('db.php');
$r="brocoli";
$sql=mysqli_query($con,"SELECT itemid,cost FROM additem where name='$r'");
while($res=mysqli_fetch_array($sql))
  {
    $id=$res['itemid'];
  $cost=$res['cost'];
  }
  echo "<h1>THE COST IS $cost</h1><br>";
?>
  <a href="cart.php?id=<?php echo $id;?>"><font size="5%">CLICK HERE TO ADD TO CART</font></a><br><br>
</div>
<br>






<div  class="container">
<div class="imgcontainer">
    <img src="image/spinach.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
Eating spinach is beneficial for maintaining healthy skin, hair and strong bones, as well as helping with digestion, lowering the risk for heart disease and improving blood glucose control in diabetics,” she told Live Science. Spinach is believed to come from Persia, according to Arizona State University.

</p><br>

<br>
<br>
<?php
include('db.php');
$s="spinach";
$sql=mysqli_query($con,"SELECT itemid,cost FROM additem where name='$s'");
while($res=mysqli_fetch_array($sql))
  {
    $id=$res['itemid'];
  $cost=$res['cost'];

  }
 echo "<h1>THE COST IS $cost</h1><br>";
?>
  <a href="cart.php?id=<?php echo $id;?>"><font size="5%">CLICK HERE TO ADD TO CART</font></a><br><br>
</div>
<br>








<br>
</form>
<label><font size="5%">HOSPITALS : KMC , SRS ,ADRASHA </font></label>
</body>
</html>