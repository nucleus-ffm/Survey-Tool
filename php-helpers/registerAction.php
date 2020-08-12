<?php

// Include config file
require_once("../config.php");
// create Table users
$createTableSurveys = "CREATE TABLE IF NOT EXISTS users (

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,    
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    `state` VARCHAR (50)                                                                                                                                                                                                                                                                                 
)
DEFAULT CHARSET=utf8
ENGINE = MYISAM;
";
//TODO: fix date
if ($db_connection->query($createTableSurveys))
    {
        // success
        # echo "Success";
    }
else
    {
        // error
        echo "Table could not be created";
        print_r($db_connection);
    }

// Define variables and initialize with empty values
$username = $password = $email = $Begründung = "";
//$username_err = $password_err = $email_err = $Begründung_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Validate Email
    if(empty(trim($_POST["email"]))){
        echo("please enter an Email");
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($db_connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            // Set parameters
            $param_email = trim($_POST["email"]);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo("this email is already taken");
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "E-Mail-Fehler! Bitte <a href='../faq.php#kontakt'>kontaktieren</a> sie die Entwickler";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        else {
            echo "E-Mail-Fehler! Bitte <a href='../faq.php#kontakt'>kontaktieren</a> sie die Entwickler";
        }
    }

    // Validate username
    if(empty(trim($_POST["username"]))){
        echo("Please enter a username.");
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db_connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo("This username is already taken.");
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Username-Fehler! Bitte <a href='../faq.php#kontakt'>kontaktieren</a> Sie die Entwickler";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
   // Validate password
    if(empty(trim($_POST["password"]))){
        echo("bitte geben Sie ein Passwort ein");     
    } elseif(strlen(trim($_POST["password"])) < 4){
        echo("Ihr passwort muss mindestens 4 Zeichen lang sein!");
    } else{
        $password = trim($_POST["password"]);
    }
    
   
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($db_connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
         // $param_Begründung = $Begründung;
         // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //success
                echo("Danke! Du hast Dich erfolgreich registiert. Dein Account wird so bald wie möglich von uns freigeschaltet");
                // Redirect to login page
                header("refresh: 5; URL= ../index.php");
                
            } else{
                echo("SQL-Fehler! Bitte versuchen Sie es später erneut!");
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($db_connection);
}


?>








