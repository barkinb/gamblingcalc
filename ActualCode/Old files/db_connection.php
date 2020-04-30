<?php
    
//create connection
$dbc = mysqli_connect('localhost','barkin','barkinbryce','users') or die(mysql_error());

if(!$dbc)
{
    die("Connection failed" . mysqli_connect_error());
}

//echo "Connected succesfully"
?>



