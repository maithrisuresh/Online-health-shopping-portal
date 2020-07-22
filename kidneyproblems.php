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
    <img src="image/apple.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
Loaded with nutrients, Apples are great for the health of your kidney too. Being a good source of pectin, which is a soluble fiber, consumption of apples regulates your blood sugar and cholesterol levels.
Also, these are a rich source of antioxidants that effectively work as kidney detox foods and help flush out toxins from the body. Apples not only help maintain kidney health but are also known to treat kidney-related diseases at their initial stages.

</p><br>
<br>
<br>
<?php
include('db.php');
$p="apple";
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
    <img src="image/strawberry.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">
Strawberries are a good choice to maintain kidney health. These have high antioxidant content along with Vitamin C, fiber, and manganese. Their anticancer and anti-inflammatory properties make them a friendly fruit for kidneys.
</p><br>

<?php
include('db.php');
$r="strawberry";
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
    <img src="image/horsetail.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
Horsetail is a powerful food for your kidney health. You can consume it as tea or a capsule supplement. The weed has diuretic properties which means it helps in increasing urine output and flushes the kidneys and urinary tract.
Further, it is loaded with antioxidants that are known to be quite beneficial for the kidneys and the renal system. Thus, include it in your diet for a healthy system

</p><br>

<br>
<br>
<?php
include('db.php');
$s="horsetail";
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







<div class="container">
<div class="imgcontainer">
    <img src="image/hyd.jpeg" alt="Avatar" class="avatar">
 </div>
  <p class="a">
Another popular herb used by Native Americans and the early settlers of the continent, Hydrangea root is known to boost the health of kidney and the urinary bladder.
The herb acts as a solvent that helps smoothen rough edges of kidney stones. It also is known to prevent the formation of kidney stones by ensuring proper usage of calcium that causes stone formation in the body.

</p><br>

<br>
<?php
include('db.php');
$c="hydrangea";
$sql=mysqli_query($con,"SELECT itemid,cost FROM additem where name='chamomile'");
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