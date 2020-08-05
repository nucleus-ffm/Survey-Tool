<?php
// Initialize the session
session_start();
 
 // Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
   exit;
 }
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$usernameLogin = $passwordLogin = "";
$username_errLogin = $password_errLogin = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POSTLogin"){
 
    // Check if username is empty
    if(empty(trim($_POST["unameLogin"]))){
        $username_errLogin = "Please enter username.";
    } else{
        $usernameLogin = trim($_POST["unameLogin"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pswLogin"]))){
        $password_errLogin = "Please enter your password.";
    } else{
        $passwordLogin = trim($_POST["pswLogin"]);
    }
    
    // Validate credentials
    if(empty($username_errLogin) && empty($password_errLogin)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db_connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $usernameLogin;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $usernameLogin, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($passwordLogin, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["unameLogin"] = $usernameLogin;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_errLogin = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_errLogin = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($db_connection);
}
?>
 