<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    if ($_SESSION["username"]=="Admin Naqi"||$_SESSION["username"]=="Admin Harris"){
        header("location: adminindex.php");
    }
    else {
        header("location: ../index.php");
    }
    exit;
}
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userr=$_POST["username"];
    $pw=$_POST["password"];

    // Check if username is empty
    if(empty(trim($userr))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($userr);
    }
     //echo "$username";
    // Check if password is empty
    if(empty(trim($pw))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($pw);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){ //prepare for execution
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    
                    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);
                   
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    //mysqli_stmt_bind_result($stmt, $id, $username, $hashed_pw);
                     //var_dump($hashed_pw);
                    if(mysqli_stmt_fetch($stmt)){
                        
                        if(password_verify($password, $hashed_pw)){
                           // if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            echo 'true';
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;    
                             
                            if ($_SESSION["username"]=="Admin dadi"||$_SESSION["username"]=="Admin Harris"){
                                //echo 'alert($_SESSION["username"])';
                            // Redirect user to welcome page
                                  //header("location: welcome2.php");
                                   header("location: adminindex.php");
                                
                            }
                             else {
                                   //echo 'alert($_SESSION["username"])';
                                   header("location: ../index.php");
                               }
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password1.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password2.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}
?>