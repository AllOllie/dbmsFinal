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
            <p>add supplier</p>
	        <input type="text" name="supplier_id"placeholder="supplier_id">
            	<input type="text" name="sname" placeholder="supplier name">

	        <input type="text" name="fname"placeholder="first">
            	<input type="text" name="lname" placeholder="last">
	        <input type="text" name="cell_number"placeholder="cell_number">
            	<input type="text" name="work_number" placeholder="work_number">
	        <input type="text" name="email"placeholder="email">

            	<input type="submit" value="add_button" name = "add_button">
        </form>
    </div>
<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');
	if (isset($_POST['add_button']))
	{ 	
		$supplier_id = $_POST['supplier_id'];
         	$sname = $_POST['sname'];

		$fname = $_POST['fname'];
         	$lname = $_POST['lname'];
		$cell_number = $_POST['cell_number'];
         	$work_number = $_POST['work_number'];
		$email = $_POST['email'];

            	


	mysqli_query($conn, "INSERT INTO supplier VALUES ('{$supplier_id}', '{$sname}')");
	//mysqli_query($conn, "INSERT INTO supply_rep VALUES ('{$fname}', '{$lname}', '{$cell_number}', '{$work_number}', '{$email}', '{$supplier_id}')");

	//if ($conn->query($sql) === TRUE) {
  	//echo "Record added successfully";
	//} else {
  	//echo "Error adding record: " . $conn->error;
	//}
	
	}
	
?>   
</body>
</html>