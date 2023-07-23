<?php      
    $host = "localhost";  
    $user = "root";  
    $pass = '';  
    $db_name = "crud";  
      
    $con = mysqli_connect($host, $user, $pass, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 