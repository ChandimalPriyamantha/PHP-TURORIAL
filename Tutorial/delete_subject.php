<?php

include 'Function/conn.php'; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from subject_table where subject_code = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:subject_mgt.php"); // redirects to subject_mgt page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
