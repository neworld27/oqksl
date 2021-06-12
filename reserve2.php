<html>
	<head><title>Ordering Service</title></head>
	<style>
	body {
	  background-color : #F6CEF5;

	}
.box {
  background-color: yellow;
  width: 400px;
  border: 14px solid red;
  padding: 50px;
  margin: 20px;
}	
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
	</style>
	<body>
		<form action="result3.php" method="POST">
		<p><h2>[Ordering Service]</h2>
		<p>
		NickName : <input type="text" name="name"><br>
		<p>
		School Id :  <input type="text" name="SchoolId"><br>
		<p>
		<div class = "box">
		Burger : 
		<p>
		<input type="checkbox" name="burger1" value="Cheese Wapper/">Cheese Wapper
		<input type="checkbox" name="burger2" value="Wapper/">Wapper
		<input type="checkbox" name="burger3" value="Bacon Wapper/">Bacon Wapper
		<input type="checkbox" name="burger4" value="BBQ Wapper/">BBQ Wapper
		<input type="checkbox" name="burger5" value="Vege Wapper/">Vege Wapper
		<p>
		<p>	
		Drink : 
		<p>
		<input type="checkbox" name="Drink1" value="Coke/">Coke
		<input type="checkbox" name="Drink2" value="Soda/">Soda
		<input type="checkbox" name="Drink3" value="Water/">Water
		<input type="checkbox" name="Drink4" value="Juice/">Juice
		<input type="checkbox" name="Drink5" value="Coffee/">Coffee
		<p>
		</div>

		Pick Up When : <input type="text" name="PickUp"><br>
		<p>
		<input type="submit" value="Order">
	</form>
	</body>
</html>
