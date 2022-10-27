<?php

include 'Function/conn.php'; // Using database connection file here

// Getting users' input details to variable.
$Subject_code = $_POST['sub_code']; 
$Subject_name = $_POST['sub_name'];
$credits = $_POST['credits'];

// Error detection
if($Subject_code=="" || $Subject_name  =="" ||$credits =="")
{
    echo "Please fill all the input fields";

}else{


//-------------------------------------- Tring to check whether subject code alrady avalable of not

//"SELECT *FROM subject_table where subject_code=$Subject_code";

//------------------------------------------------------------------------------------------


// inserting users' given details to databas call as BICT in subject_table.
$add = mysqli_query($conn,"INSERT INTO subject_table (subject_code,subject_name,credits)
VALUE ('$Subject_code','$Subject_name','$credits');");



if($add)
{
    mysqli_close($conn); // Close connection
    header("location:subject_mgt.php"); // redirects to subject_mgt page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

}


?>