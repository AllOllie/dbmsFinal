<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background: gray;

}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover {
    background-color: black;
  }

    </style>
</head>
<body>

 
    <ul>
       
        <li><a class="signup" href="signup.php">signup</a></li>
        <li><a class ="home" href="home.php">home</a></li>
        <li><a class="customer login" href="login.php">customer login</a></li>
        <li><a class ="admin" href="admin.php">admin</a></li>
	<li><a class="viewCustomer" href="admincustomers.php">viewCustomers</a></li>
        <li><a class ="viewBooks" href="adminbooks.php">viewbooks</a></li>
        <li><a class="viewOrders" href="adminorders.php">viewOrders</a></li>
        <li><a class ="addCustomers" href="admin.php">addcustomers</a></li>
	<li><a class ="addBooks" href="admin.php">addbooks</a></li>
	<li><a class ="addOrders" href="admin.php">addOrders</a></li>
	<li><a class ="removeCustomers" href="removecustomers.php">admin</a></li>
	<li><a class ="removebooks" href="removebooks.php">admin</a></li>
	<li><a class ="removeorders" href="removeorders.php">admin</a></li>

    </ul>
    
	<?php
		global $count;
		$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        	require_once('connection.php');

		$sql = "SELECT order_id, order_date, order_value, customer_id FROM orders";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table style='border: solid 1px black;'>";
			  echo "<table><tr><th>order_id</th><th>order_date</th><th>order_value</th><th>customer_id</th>";
  			// output data of each row
  			while($row = $result->fetch_assoc()) {
    				echo "<tr><td>".$row["order_id"]."</td><td>".$row["order_date"]."</td><td>".$row["order_value"]."</td><td>".$row["customer_id"]."</td></tr>";
  			}
  			echo "</table>";
			} 
			else {
                echo "there are no files in the table";
			}
			
		
	
			
		$conn->close();
	?>
    </body>
    </html>