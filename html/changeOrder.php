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
        <li><a class ="home" href="home.php">home</a></li>
	<li><a class ="updatecustomers" href="customerUpdate.php">update customer</a></li>
        <li><a class="signup" href="signup.php">create Account</a></li>

        <li><a class ="home" href="changeOrder.php">change order</a></li>
	<li><a class ="updatecustomers" href="placeOrder.php">place order</a></li>
        <li><a class="signup" href="viewOrder.php">view order</a></li>       
        
        
    </ul>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>update order</p>
		<input type="text" name="order_id"placeholder="order_id">
            	<input type="text" name="order_date" placeholder="order_date">
            	<input type="text" name="order_value"placeholder="order_value">
            	<input type="text" name="customer_id"placeholder="customer_id">
            	<input type="text" name="publish_date"placeholder="publish_date">
            	<input type="text" name="ISBN"placeholder="ISBN">
            	<input type="text" name="item_numbers"placeholder="item_numbers">


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
         	$ISBN = $_POST['ISBN'];
		$item_numbers = $_POST['item_numbers'];
         	

	mysqli_query($conn, "UPDATE `orders` SET `order_date`='{$order_date}',`order_value`='{$order_value}',`customer_id`='{$customer_id}' WHERE `order_id`='{$order_id}';");
	mysqli_query($conn, "UPDATE `order_items` SET `item_price`='{$order_value}',`ISBN`='{$ISBN}' WHERE `order_id`='{$order_id}' && `item_numbers`='{$item_numbers}';");
	
	//if ($conn->query($sql) === TRUE) {
  	//echo "Record update successfully";
	//} else {
  	//echo "Error update record: " . $conn->error;
	//}
	//}
	$conn->close();
}
	
?>   
</body>
</html>