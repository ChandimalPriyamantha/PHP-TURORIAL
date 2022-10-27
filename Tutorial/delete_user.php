<?php

include 'Function/conn.php'; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from user_table where user_id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:user_mgt.php"); // redirects to user_mgt page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>