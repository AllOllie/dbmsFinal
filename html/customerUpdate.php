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
        <li><a class ="home" href="customerhome.php">home</a></li>
        
	
    </ul>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>update customer</p>
	        <input type="text" name="customer_id"placeholder="customer_id">
            	<input type="text" name="fname" placeholder="FirstName">
            	<input type="text" name="lanme"placeholder="LastName">
            	<input type="text" name="contact_id"placeholder="contact_id">
	    	<input type="text" name="email"placeholder="email">
            	<input type="text" name="phone" placeholder="phone">
		<input type="text" name="address" placeholder="address">

            <input type="submit" value="add_button" name = "add_button">
        </form>
    </div>
<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');
	if (isset($_POST['add_button']))
	{ 	
		$fname = $_POST['fname'];
         	$lanme = $_POST['lanme'];
            	$customer_id = $_POST['customer_id'];
	 	$contact_id = $_POST['contact_id'];
         	$email = $_POST['email'];
         	$address = $_POST['address'];
	 	$phone = $_POST['phone'];

	mysqli_query($conn, "UPDATE `customers` SET `lanme`='{$lanme}',`contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}' && `fname`='{$fname}';");
	mysqli_query($conn, "UPDATE `customers` SET `fname`='{$fname}',`lanme`='{$lanme}',`contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}';");
	mysqli_query($conn, "UPDATE `customer_address` SET `address`='{$address}',`contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}';");
	mysqli_query($conn, "UPDATE `customer_contact_details` SET `contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}';");
	mysqli_query($conn, "UPDATE `customer_email` SET `email`='{$email}',`contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}';");
	mysqli_query($conn, "UPDATE `customer_number` SET `phone`='{$phone}',`contact_id`='{$contact_id}' WHERE `customer_id`='{$customer_id}';");
	
	
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