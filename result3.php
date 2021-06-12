<html>
<head><title>resevation</title></head>
<style>

body {
   background-color : gold;
}


</style>

<body>
<?php  
$name = $_POST["name"];
$SchoolId = $_POST["ShoolId"];
$burger1 = $_POST["burger1"];
$burger2 = $_POST["burger2"];
$burger3 = $_POST["burger3"];
$burger4 = $_POST["burger4"];
$burger5 = $_POST["burger5"];
$Drink1 = $_POST["Drink1"];
$Drink2 = $_POST["Drink2"];
$Drink3 = $_POST["Drink3"];
$Drink4 = $_POST["Drink4"];
$Drink5 = $_POST["Drink5"];
$PickUp = $_POST["PickUp"];

echo "Nick Name : $name<br>";
echo "School Id : $SchoolId<br>";
echo "Burger : $burger1 $burger2 $burger3 $burger4 $burger5<br>";  
echo "Drink : $Drink1 $Drink2 $Drink3 $Drink4 $Drink5<br>";
echo "Order Time : ". date("Y-m-d   H:i:s")."<br/>";
echo "Pick up Time : $PickUp<br>";
?>
	</body>
</html>
