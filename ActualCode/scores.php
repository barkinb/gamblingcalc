<?php 
$page_title = 'GambCalc - Scores';
include('header.html');
require ('db_connection.php');

$sql = "SELECT TicketCost, number1, number2, number3, number4, number5, expectedValue FROM euromillions";

$result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> TicketCost: £" . $row["TicketCost"]. " - Numbers 1-5 : " . $row["number1"]. "," . $row["number2"]. ","  . $row["number3"]. "," . $row["number4"]. ",". $row["number5"]. " Expected loss ". $row["expectedValue"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($dbc);
?>




