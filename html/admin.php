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

    </ul>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>sign up</p>
	        <input type="text" name="customer_id"placeholder="customer_id">
            <input type="text" name="fname" placeholder="FirstName">
            <input type="text" name="lanme"placeholder="LastName">
            <input type="text" name="contact_id"placeholder="contact_id">
	        <input type="text" name="email"placeholder="email">
            <input type="text" name="phone" placeholder="phone">
		    <input type="text" name="address" placeholder="address">

            <input type="submit" value="signup" name = "signup_button">
        </form>
    </div>
<?php
	$con = mysqli_connect("localhost","root","Pancho34","bookstore");
        require('connection.php');
        if(isset($_POST['signUp_button']))
        {
            $fname =$_POST['fname'];
            $lanme =$_POST['lanme'];
            $customer_id =$_POST['customer_id'];
	        $contact_id = $_POST['contact_id'];
            $email = $_POST['email'];
            $address = $POST['address'];
	        $phone = $POST['phone'];

          //  if (isset($success) && $success == true){ 
           //     echo '<font color="green">Yay!! Your account has been created. <a href="./login.php">Click here</a> to login!<font>'; 
          //  } 
       // if(!empty($_POST['fname']) && !empty($_POST['lanme'])&& !empty($_POST['customer_id']) && !empty($_POST['contact_id']) && !empty($_POST['address']) && !empty($POST['phone'])){
		    echo "closer";
		    //$sql = "INSERT INTO `customers` (`customer_id`, `fname`, `lanme`, `contact_id`) VALUES (\'2\', \'pete\', \'what\', NULL);";
 		    $sql = "INSERT INTO 'customers'('customer_id', 'fname', 'lanme', 'contact_id') VALUES ('$customer_id', '$fname', '$lanme', '$contact_id')";
		    $rs = mysqli_query($con,$sql);    
            $sql = "INSERT INTO 'customer_contact_details'('contact_id','customer_id') VALUES ('$contact_id','$customer_id')";
       		$rs = mysqli_query($con,$sql);
		    //$sql = "INSERT INTO 'customer_email'('email', 'contact_id', 'customer_id') VALUES ('$email', '$contact_id', '$customer_id')";
		    //$rs = mysqli_query($con,$sql);
        	//$sql = "INSERT INTO 'customer_number'('phone', 'contact_id', 'customer_id') VALUES ('$phone', '$contact_id', '$customer_id')";
		    //echo "$fname";        
		    //$rs = mysqli_query($con,$sql);
		    if($rs)
		    {
			    echo "contact records inserted";
		    }
		    else{
			    echo "something went wrong";
			}      
        }

?>   
</body>
</html>