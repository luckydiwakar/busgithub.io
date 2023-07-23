<?php      
    include('connection.php');  
    $user = $_POST['user'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $pass = stripcslashes($pass);  
        $user = mysqli_real_escape_string($con, $user);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from mytab where user = '$user' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>