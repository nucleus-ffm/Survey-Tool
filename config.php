<?php
#error_reporting(0);#jegliche Fehler werden nicht mehr angezeit


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
    #echo 'Success";
    #print_r( $db_link);
}
else
{
    // Something went wrong
    die('No conncetion possible: ' ); #mysqli_error()
}


?>
