<?php
    class bookstore
    {  
        function OpenCon() 
         { 
            $dbhost = "localhost"; 
            $dbuser = "root"; 
            $dbpass = "Pancho34"; 
            $db = "bookstore"; 
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error); 
            return $conn; 
        } 
        function CloseCon($conn) 
        { 
            $conn -> close(); 
        } 


       // public static function connect()
       // {
      //      $con= new PDO('mysql:localhost=host; dbname=bookstore','root','Pancho34');
      //  }
    }
?>