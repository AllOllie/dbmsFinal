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
            <p>remove Author</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>Remove Author</p>
	        <input type="text" name="author_id"placeholder="author_id">


		<input type="submit" value="remove_Author" name = "remove_Author">

        </form>
    </div>
<?php
	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');

	if (isset($_POST['remove_Author']))
	{ 	
	$author_id = $_POST['author_id'];

	$sql = "DELETE FROM author WHERE author_id= '{$author_id}'";
	if ($conn->query($sql) === TRUE) {
  	echo "Record deleted successfully";
	} else {
  	echo "Error deleting record: " . $conn->error;
	}
	}
	$conn->close();




//// not working
//	if (isset($_POST['remove_button']))
//	{ 	
//		$ISBN = $_POST['ISBN'];
//		mysqli_query($conn, "DELETE FROM warehouse WHERE ISBN= '{$ISBN}'");
//		mysqli_query($conn, "DELETE FROM books WHERE ISBN='{$ISBN}'");
//
//
//	//$query = mysqli_query($conn, "DELETE * FROM books WHERE ISBN='{$ISBN}'");
//	//if (mysqli_num_rows($query) == 1)
//	//{   DELETE FROM `books` WHERE ISBN = 102;
//		
//		echo "REMOVED $ISBN from warehouse and books";
//    		$success = true;
		
	//}
      //  }
	//mysqli_query($conn, "DELETE * FROM books WHERE ISBN='{$ISBN}'");
	//mysqli_query($conn, "INSERT INTO bookcategory VALUES ('{$category_code}', '{$category_description}', '{$ISBN}')");

//	}

?>   