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
    <img src="image/ashwaganda.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
It is a adaptogen and ayurvedic remedy .Some research suggest that it may be just as effective as certain medication in reducing anxiety.

</p><br>
<br>
<br>
<?php
include('db.php');
$p="ashwaganda";
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
    <img src="image/blueberries.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">
When we are anxious and stressed our bodies crave vitamin C to help repair and protect our cells and blueberries are packed full of it.Small but mighty , they are bursting with antioxidants and vitamin C which have been shown to rovide anxiety relief.
</p><br>

<?php
include('db.php');
$r="blueberries";
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
    <img src="image/avocado.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
Avocados are rich in stress relieving B vitamins and heart healthy fat that may help to lessen anxiety.Vitamin E is a nutrient which is important for viion,helathy skin etc.

</p><br>

<br>
<br>
<?php
include('db.php');
$s="avocado";
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