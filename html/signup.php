
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
<?php
        require('connection.php');
        if(isset($_POST['signUp_button']))
        {
            $FirstName =$_POST['FirstName'];
            $LastName =$_POST['LastName'];
            $c_id =$_POST['c_id'];

            if(!empty($_POST['FirstName']) && !empty($_POST['LastName'])&& !empty($_POST['contact_id']))
            {
                $p=bookstore::conect()->prepare('INSERT INTO customers(c_id,fname,lastname,contact_id) VALUE(:c,:f,:l,:co)')
                $p->bindVValue(':c',$c_id);
                $p->bindValue(':f',$FirstName);
                $p->bindValue(':l',$LastName);
                $p->bindValue(':co',$contact_id);
                $p->execute();
            }          
        }

?>
    <div class="form">
        <div class = "title">
            <p>signup</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>sign up</p>
            <input type="text" name="FirstName" placeholder="FirstName">
            <input type="text" name="LastName"placeholder="LastName">
            <input type="text" name="c_id"placeholder="c_id">
            <input type="submit" value="signup" name = "signup_button">
        </form>
    </div>
    
</body>
</html>