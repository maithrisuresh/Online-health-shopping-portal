
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
    <img src="image/kiwi.jpeg" alt="Avatar" class="avatar">
 </div>
  <p  class="a">
Kiwi fruit benefits are amazing. Kiwis are loaded with vitamin C, fiber, and B-vitamins. A recent study published in the British Journal of Nutrition found that a diet rich in kiwi was able to reduce cold symptoms (head congestion and sore throat) among participants.
.
</p><br>

<?php
include('db.php');
$r="kiwi";
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
    <img src="image/lemonbalm.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
 citrus scented member of the mint family is an often overlooked antiviral. Lemon balm (Melissa officinalis) may also be effective in speeding the healing of cold sores. Lemon balm makes a soothing, relaxing cup of antiviral tea, but can applied as a soothing “poultice” of sorts, or as a tincture. 
</p><br>

<br>
<br>
<?php
include('db.php');
$s="lemonbalm";
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
While we normally think of ginger as a solution for upset stomachs, it can have other soothing benefits as well. In addition to being a powerful cancer fighter and anti-inflammatory food, ginger is great for congestion, cough, sore throat, stuffy nose, and can promote perspiration and detoxification. Check out ginger health benefits here.


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

</body>
</html>