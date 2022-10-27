<?php 

//Initilizing veriable
$UserName_from_user = "";
$Password_from_user = "";

// getting login details from the user.
if(isset($_POST['Submit'])){
 
    $UserName_from_user = $_POST['user_name'];
    $Password_from_user = $_POST['password'];


}
    
// call the connection function to connect with the BICT databas.
include 'Function/conn.php';

$sql1 = "SELECT *FROM user_table where role='administrator'";
$login_details_result = mysqli_query($conn, $sql1);


if(mysqli_num_rows($login_details_result)>0){

    while($row=mysqli_fetch_assoc($login_details_result)){

        $UserName_from_database= $row['username'];
        $UserPassword_from_database = $row['password'];
        $User_role = $row['role'];
    }
}

mysqli_close($conn); //close the connection

// checking login details are correct or not.
if($UserName_from_user == $UserName_from_database && 
$Password_from_user == $UserPassword_from_database && $User_role=='administrator')
    {
        include 'admin_page.php';
    }else{

    if( $UserName_from_user != $UserName_from_database){
      
        echo "Please enter the valid username ";
          
    }
    
    if($Password_from_user != $UserPassword_from_database){
    
        echo"Password is incorrect ";
      
    }

    include 'login.html';
    

 }
?>