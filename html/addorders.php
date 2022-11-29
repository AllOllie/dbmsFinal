<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
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
	<li><a class ="addBooks" href="addbooks.php">addbooks</a></li>
	<li><a class ="addOrders" href="addorders.php">addOrders</a></li>
	<li><a class ="removeCustomers" href="removecustomers.php">admin</a></li>
	<li><a class ="removebooks" href="removebooks.php">admin</a></li>
	<li><a class ="removeorders" href="removeorders.php">admin</a></li>

    </ul>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>add orders</p>
	        <input type="text" name="order_id"placeholder="order_id">
            	<input type="text" name="order_date" placeholder="order_date">
            	<input type="text" name="order_value"placeholder="order_value">
            	<input type="text" name="customer_id"placeholder="customer_id">
            	<input type="text" name="publish_date"placeholder="publish_date">
            	<input type="text" name="supplier_id"placeholder="supplier_id">

            	<input type="submit" value="add_button" name = "add_button">

        </form>
    </div>
<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');
	if (isset($_POST['add_button']))
	{ 	
		$order_id = $_POST['order_id'];
         	$order_date = $_POST['order_date'];
            	$order_value = $_POST['order_value'];
	 	$customer_id = $_POST['customer_id'];
         	$publish_date = $_POST['publish_date'];
         	$supplier_id = $_POST['supplier_id'];


	mysqli_query($conn, "INSERT INTO books VALUES ('{$ISBN}', '{$order_id}', '{$order_date}', '{$order_value}','{$customer_id}', '{supplier_id}')");
	//mysqli_query($conn, "INSERT INTO bookcategory VALUES ('{$category_code}', '{$category_description}', '{$ISBN}')");

	}

?>   
</body>
</html>