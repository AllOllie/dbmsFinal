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
    <?php
    /*
        require('connection.php');
        if(isset($_POST['login_button']))
        {
            $_SESSION['validate']= false;
            $c_id =$_POST['c_id'];
            $p=bookstore::OpenCon()->prepare('SELECT *FROM customer WHERE c_id=:c');
            $p->bindValue('c', $c_id);
            $p->execute();
            $d=$p->fetch(PDP::FETCH_ASSOC);
            if($p->rowCount()>0)
            {
                $_SESSION['c_id']=$c_id;
                $_SESSION['validate']=true;
                header('location:home.php')
            }
        }
*/
    ?>
    <div class="form">
        <div class = "title">
            <p>login</p>
        </div>
    </div>
    <div class="form">
        <form action="" method="post">
            <p>login in</p>
            <input type="text" name="c_id" placeholder="c_id">
            <input type="submit" value="login" name = "login_button">
        </form>
    </div>
    <?php
        require('connection.php');
        if(isset($_POST['login_button']))
        {
            $_SESSION['validate']= false;
            $c_id =$_POST['c_id'];
            $p=bookstore::OpenCon()->prepare('SELECT *FROM customer WHERE c_id=:c');
            $p->bindValue('c', $c_id);
            $p->execute();
            $d=$p->fetch(PDP::FETCH_ASSOC);
            if($p->rowCount()>0)
            {
                $_SESSION['c_id']=$c_id;
                $_SESSION['validate']=true;
                header('location:home.php')
            }
        }

    ?>
    
</body>
</html>