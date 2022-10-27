<?php

include 'Function/conn.php'; // Using database connection file here


// Getting users' input details to variable.
$Uname = $_POST['user_name']; 
$Upassword = $_POST['password'];
$Uemail = $_POST['email'];
$Urole = $_POST['role'];

// Error detection
if($Uname=="" || $Upassword =="" || $Uemail=="" || $Urole =="")
{
    echo "Please fill all the input fields";

}else{

// inserting users' given details to databas call as BICT in user_table.
$add = mysqli_query($conn,"INSERT INTO user_table (username,password,email,role)
VALUE ('$Uname','$Upassword','$Uemail','$Urole');");



if($add)
{
    mysqli_close($conn); // Close connection
    header("location:user_mgt.php"); // redirects to user_mgt page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
}
?>