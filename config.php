<?php
#error_reporting(0); #if 0 errors are not displayed


// To establish the connection to the database
// enter your data here
define ( 'MYSQL_HOST', '*' );
define ( 'MYSQL_USERNAME', '*' );
define ( 'MYSQL_PASSWORD', '*' );
define ( 'MYSQL_DATABASE', '*' );

$db_connection = mysqli_connect(
    MYSQL_HOST,
    MYSQL_USERNAME,
    MYSQL_PASSWORD,
    MYSQL_DATABASE);


if ( $db_connection )
{
    // success
    #echo 'Success";
    #print_r( $db_link);
}
else
{
    // Something went wrong
    die('No conncetion possible: ' ); #mysqli_error()
}


?>
