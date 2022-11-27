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

    </ul>
    
	<?php
		$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        	require_once('connection.php');

		$sql = "SELECT title, price, reviews FROM books";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table style='border: solid 1px black;'>";
			  echo "<table><tr><th>sub</th><th>Add</th><th>Title</th><th>Price</th><th>Reviews</th>";
  			// output data of each row
  			while($row = $result->fetch_assoc()) {
    				echo "<tr><td>-</td><td>+</td><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["reviews"]."</td></tr>";
  			}
  			echo "</table>";
			} 
			else {
  			echo "0 results";
			}
			
//good here
		//$sql = "SELECT title, price, reviews FROM books";
		//$result = $conn->query($sql);
		//if ($result->num_rows > 0) {
    // output data of each row
			//echo "<br> title <br>
    			//while($row = $result->fetch_assoc()) {
        		//echo "<br> title: ". $row["title"]. " - price: ". $row["price"]. " reviews " . $row["reviews"] . "<br>";
    			//}
			//} else {
    			//echo "0 results";
			//}
//to here
		$conn->close();
	?>
    </body>
    </html>