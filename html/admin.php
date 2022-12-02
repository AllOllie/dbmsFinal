<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
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

<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');


	if (isset($_POST['btnCustomer']))
	{
		
		//$sql = "SELECT * FROM customers";
		//$result = $conn->query($sql);
		$query = mysqli_query($conn, "SELECT * FROM customers WHERE 1");
	if (mysqli_num_rows($query) == 1)
	{
		echo "hello $fname";
    		$success = true;
		
	}
        }
	
	
		

?>   
</body>
</html>