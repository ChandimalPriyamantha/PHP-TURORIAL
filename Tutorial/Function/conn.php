<?php 

// connection with localhost mysql server.
$address = "localhost";
$user_name = "root";
$password = "1234";
$conn = mysqli_connect($address,$user_name,$password);
if($conn === false){
    echo "Detect the connection faliure.!";
}else{
    
    // select the database called as BICT that was created.
    mysqli_select_db($conn, "BICT");
    
}




?>