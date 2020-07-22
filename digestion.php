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
    <img src="image/papaya.jpeg" alt="Avatar" class="avatar">
  </div>
  <p class="a">
Papaya has a high papain content, which is an enzyme that helps the body decompose proteins which helps speed up digestion. 
Similarly, medium-sized papayas can offer almost 20% of the daily recommended amount of fiber, which helps out your intestines.
</p><br>
<br>
<br>
<?php
include('db.php');
$p="papaya";
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
Rosemary aids in treating constipation through aromatherapy. According to recent studies, using essential rosemary oil for lower abdominal massages helps digestion. Even more, it shows results up to two weeks after the treatment.
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
    <img src="image/oregano.jpeg" alt="Avatar" class="avatar">
  </div>
<p class="a">
Oregano is a great source of fiber. Two teaspoons provide 4% of the daily recommended amount of fiber. Consuming oregano regularly helps ease digestion by stimulating the release of stomach bile.
This antispasmodic action reduces gases, swelling, indigestion, and general abdominal pain that can result from digestive problems.
</p><br>

<br>
<br>
<?php
include('db.php');
$s="oregano";
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
    <img src="image/chamoline.jpeg" alt="Avatar" class="avatar">
 </div>
  <p class="a">
People with poor digestion can use this plant to make a lovely tea in order to soothe digestive complications. Likewise, hot beverages are especially convenient for soothing digestion problems.
In addition, chamomile roots have been found to have laxative properties that also aid in digestion.

</p><br>

<br>
<?php
include('db.php');
$c="chamomile";
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

<label><font size="5%">HOSPITALS : KMC , SRS  </font></label>
</body>
</html>


