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
    <img src="image/aloevera.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
Aloe Vera
This awesome plant contains more than 20 minerals and vitamins A, C, E, B1, B2, B6, and B12 which are essential for hair growth. It is a hair growth stimulant and conditioning agent which contains an enzyme necessary for the stimulation of new hair growth. It is highly anti-inflammatory and anti-bacterial which helps reduce things such as Alopecia.

</p><br>
<br>
<br>
<?php
include('db.php');
$p="aloevera";
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
    <img src="image/rosemary.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">

Rosemary and rosemary essential oil has been traditionally used to increase circulation to the scalp. Eating rosemary in your food or using the essential oil in your shampoo is a great way to improve scalp circulation and promote healthy hair growth.

</p><br>

<?php
include('db.php');
$r="rosemary";
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
    <img src="image/lemongrass.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">

Lemongrass is known to fight hair loss, as well as treat oily hair and dry scalp. Lemongrass strengthens hair follicles which is essential in preventing hair loss.

</p><br>

<br>
<br>
<?php
include('db.php');
$s="lemongrass";
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
    <img src="image/ginger.jpeg" alt="Avatar" class="avatar">
 </div>
  <p class="a">
Ginger has a natural ability to stimulate blood flow to the scalp which is incredibly important if you want to improve the quality and health of your hair. Improved blood flow stimulates the hair follicles and results in restored hair growth. Leaving in a mixture of 1tbsp. Ginger power and 2tbsp. Jojoba oil in your hair for 30 minutes (after gently massaging it in) is a wonderful way to get some of these benefits! Consuming ginger also helps!

</p><br>

<br>
<?php
include('db.php');
$c="ginger";
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
<label><font size="5%">HOSPITALS : KMC , AJ, MAITHRI CLINIC  </font></label>
</body>
</html>