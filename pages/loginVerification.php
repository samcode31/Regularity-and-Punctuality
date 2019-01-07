<?php 
session_start(); 
require('../db/DatabaseAdapter.php');


$db = new DatabaseAdapter();
$conn = $db->conn;

$user = "";
$status = 0;
$errorType = 0;


$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
        
if(isset($password)){
    //echo "<script>alert('password blank')</script>";
    $sqlValidateUser = "select * from user where user_name = '".$username."'";
    
    $results = $db->doQuery($sqlValidateUser);
            
    if(!empty($results)){
        $numRows = mysqli_num_rows($results);			
            
        if($numRows != 0){
            //username correct
            $row = $results->fetch_assoc();
            if(sha1($password) == $row['password']){
                //password correct
                switch($row['role_id']){
                    case 1:
                    //admin login
                    $user = "Admin";
                    break;

                    case 2:
                    //teacher login
                    $user = "Teacher";
                    $userId = $row['user_id'];
                    $status = $row['user_status_id'];
                    $_SESSION['user_id'] = $userId;
                    break;

                    case 3:
                    //student login
                    $user = "Student";
                    break;		
                }
            }
            else{
                $passwordError = 1;
                $errorMsg = "Your password is Incorrect.";
            }						
        }
        else{
            $errorMsg = "Your Username Is Incorrect.";
            $usernameError = 1;
        }
    }
}
else{
    $errorMsg = "Please enter a password to continue.";
}

if(isset($errorMsg)){
    //error occured with login
    $error = 1;
    $user = "";
    
    if(isset($usernameError)){
        $errorType = 1;
    }
    else if(isset($passwordError)){
        $errorType = 2;
    }
}
else{
    //login successful
    $error = 0;
    $errorMsg = "";     
}

$output = array($error, $errorMsg, $user, $status, $errorType);

$myJson = json_encode($output);

echo $myJson;
//echo $numRows;



?>