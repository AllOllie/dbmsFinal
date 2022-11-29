
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <ul>
       
        <li><a class="signup" href="signup.php">signup</a></li>
        <li><a class ="home" href="home.php">home</a></li>
        <li><a class="customer login" href="login.php">customer login</a></li>
        <li><a class ="admin" href="adminhome.php">admin</a></li>

    </ul>
    <div class="form">
        <div class = "title">
            <p>login</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>login in</p>
	    <input type="text" name="fname" placeholder="fname">	
            <input type="text" name="password" placeholder="password">
            <input type="submit" value="login" name = "login_button">
        </form>
    </div>

    <?php

	$conn = mysqli_connect("localhost","root","Pancho34","bookstore");
        require_once('connection.php');
        if(isset($_POST['login_button']))
        {
            $_SESSION['validate']= false;
	    $fname =$_POST['fname'];
            $password =$_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM admin WHERE fname='{$fname}' && password ='{$password}'");
	if (mysqli_num_rows($query) == 1)
	{
		header('Location: admin.php');
		echo "hello $fname";
    		$success = true;	
	}
	
	else{
		echo"login failed try agian";
	}
        }

    	?>
 
    
</body>
</html>