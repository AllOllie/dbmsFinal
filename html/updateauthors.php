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
        <li><a class ="addCustomers" href="addcustomers.php">addcustomers</a></li>
	<li><a class ="addBooks" href="addbooks.php">addbooks</a></li>
	<li><a class ="addOrders" href="addorders.php">addOrders</a></li>
	<li><a class ="removeCustomers" href="removecustomers.php">remove customer</a></li>
	<li><a class ="removebooks" href="removebooks.php">remove book</a></li>
	<li><a class ="removeorders" href="removeorders.php">remove order</a></li>
	<li><a class ="viewbook" href="adminbooks.php">viewbooks</a></li>
	<li><a class ="viewauthor" href="adminauthors.php">viewauthors</a></li>
	<li><a class ="viewsupplier" href="adminsuppliers.php">view supplier</a></li>
	<li><a class ="removesuppliers" href="removesuppliers.php">remove supplier</a></li>
	<li><a class ="removeauthors" href="removeauthors.php">remove author</a></li>
	<li><a class ="addsupplier" href="addsuppliers.php">add supplier</a></li>
	<li><a class ="addauthors" href="addauthors.php">add author</a></li>


	<li><a class ="updateauthors" href="updateauthors.php">update author</a></li>
	<li><a class ="updatebooks" href="updatebooks.php">update books</a></li>
	<li><a class ="updatecustomers" href="updatecustomers.php">update customer</a></li>

    </ul>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>update Authors</p>
	        <input type="text" name="author_id"placeholder="author_id">
            	<input type="text" name="birthdate" placeholder="birthdate">
            	<input type="text" name="gender"placeholder="gender">
            	<input type="text" name="firstn"placeholder="firstn">
	    	<input type="text" name="lname"placeholder="lname">
            	
		<input type="text" name="contact_id" placeholder="contact_id">
		<input type="text" name="address" placeholder="address">

		<input type="text" name="email" placeholder="email">
		<input type="text" name="phone" placeholder="phone">

		<input type="submit" value="add_button" name = "add_button">

        </form>
    </div>
<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');
	if (isset($_POST['add_button']))
	{ 	
		$author_id = $_POST['author_id'];
         	$birthdate = $_POST['birthdate'];
            	$gender = $_POST['gender'];
	 	$firstn = $_POST['firstn'];
         	$lname = $_POST['lname'];
         	$contact_id = $_POST['contact_id'];
	 	$address = $_POST['address'];

         	$email = $_POST['email'];
	 	$phone = $_POST['phone'];

	mysqli_query($conn, "UPDATE `author` SET `birthdate`='{$birthdate}',`gender`='{$gender}',`firstn`='{$firstn}',`lname`='{$lname}' WHERE `author_id`='{$author_id}';");
	mysqli_query($conn, "UPDATE `author_address` SET `address`='{$address}',`contact_id`='{$contact_id}' WHERE `author_id`='{$author_id}';");
	mysqli_query($conn, "UPDATE `author_contact_details` SET `contact_id`='{$contact_id}' WHERE `author_id`='{$author_id}';");
	mysqli_query($conn, "UPDATE `author_email` SET `email`='{$email}',`contact_id`='{$contact_id}' WHERE `author_id`='{$author_id}';");
	mysqli_query($conn, "UPDATE `author_number` SET `phone`='{$phone}',`contact_id`='{$contact_id}' WHERE `author_id`='{$author_id}';");
	}
	//$conn->close();
?>   
</body>
</html> 