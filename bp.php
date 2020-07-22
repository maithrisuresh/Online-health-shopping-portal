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
    <img src="image/basil.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
It is a delicious herb that goes well in variety of foods.It also might help lower your bp.In rodents , basil extract has been shown to lower bp although only briefly.

</p><br>
<br>
<br>
<?php
include('db.php');
$p="basil";
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
    <img src="image/banana.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">
  It contain plenty of pottasium , a mineral that plays a vital role in managing hypertension.Pottasium reduces the effect of sodium and alleviates tension in the voice of blood vessels.Hence reduces bp.
</p><br>

<?php
include('db.php');
$r="banana";
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
    <img src="image/cinnamon.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
Cinnamon is another tasty seasoning that requires little effort to include in your daily diet and it may bring bp numbers down.One study done in rodents suggested that cinnamon extract lowered both sudden onset and prolonged high bp
</p><br>

<br>
<br>
<?php
include('db.php');
$s="cinnamon";
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







</form>
<label><font size="5%">HOSPITALS : KMC ,AJ , etc </font></label>
</body>
</html>