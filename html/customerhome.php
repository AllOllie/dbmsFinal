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
       
        <li><a class ="home" href="home.php">home</a></li>
	<li><a class ="updatecustomers" href="customerUpdate.php">update customer</a></li>
        <li><a class="signup" href="signup.php">create Account</a></li>

        <li><a class ="home" href="changeOrder.php">change order</a></li>
	<li><a class ="updatecustomers" href="placeOrder.php">place order</a></li>
        <li><a class="signup" href="viewOrder.php">view order</a></li>

    </ul>

		<form action="customerhome.php" method="POST">
		<input type="text" name="query" />
		<input type="submit" value="Search" />
		</form>

    
	<?php

		$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        	require_once('connection.php');

		$sql = "SELECT title, publish_date, reviews FROM books";
		$result = $conn->query($sql);


			if ($result->num_rows > 0) {
			  echo "<table><tr><th>sub</th><th>Add</th><th><input type='submit'name ='Title' value='Title'></input><th><input type='submit'name ='publish_date' value='publish_date'></input><th><input type='submit'name ='Reviews' value='Reviews'></input></th>";
  			
  			while($row = $result->fetch_assoc()) {
    				echo "<tr><td><input type='submit'name ='subtract' value='-'></input></td><td><input type='submit'name ='add' value='+'></input></td><td>".$row["title"]."</td><td>".$row["publish_date"]."</td><td>".$row["reviews"]."</td></tr>";
  			}
  			echo "</table>";
			} 
			else {
  			echo "0 results";
			}

			if (isset($_POST['Title']))
			{ 	
					
			}
			if (isset($_POST['publish_date']))
			{ 	

	
			}
			if (isset($_POST['Reviews']))
			{ 	

	
			}
		
		//}
			
			
	//	$conn->close();
	?>
    </body>
    </html>