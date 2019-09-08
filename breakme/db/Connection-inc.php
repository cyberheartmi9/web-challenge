<?php



$host="127.0.0.1";
$dbuser="root";
$password="";
$dbname="knights";

error_reporting(0);
$con = mysql_connect($host,$dbuser,$password);
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
    @mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");
}





?>