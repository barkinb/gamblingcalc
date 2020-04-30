<?php
$page_title = 'GambCalc - Register';
include('header.html');
if ( $_SERVER['REQUEST_METHOD']=='POST')

{
    require ('db_connection.php');
    $errors = array();

    if (empty($_POST['TicketCost']))
    {$errors[] = 'Enter the price of the ticket.' ; }
    else 
    {$TicketCost = mysqli_real_escape_string($dbc,trim($_POST['TicketCost']));}
    
    if (empty($_POST['number1']))
    {$errors[] = 'Enter the first number.' ; }
    elseif ($_POST['number1'] > 59 || $_POST['number1'] <1)
    {$errors[] = 'The first number is less than 1 or greater than 59. Please re-enter number 1. ';}
    else 
    {$number1 = mysqli_real_escape_string($dbc,trim($_POST['number1']));}

    if (empty($_POST['number2']))
    {$errors[] = 'Enter the second number.' ; }
    elseif ($_POST['number2'] > 59 || $_POST['number2'] <1)
    {$errors[] = 'The second number is less than 1 or greater than 59. Please re-enter number 2. ';}
    else 
    {$number2 = mysqli_real_escape_string($dbc,trim($_POST['number2']));}

    if (empty($_POST['number3']))
    {$errors[] = 'Enter the third number.' ; }
    elseif ($_POST['number3'] > 59 || $_POST['number3'] <1)
    {$errors[] = 'The third number is less than 1 or greater than 59. Please re-enter number 3. ';}
    else 
    {$number3 = mysqli_real_escape_string($dbc,trim($_POST['number3']));}

    if (empty($_POST['number4']))
    {$errors[] = 'Enter the fourth number.' ; }
    elseif ($_POST['number4'] > 59 || $_POST['number4'] <1)
    {$errors[] = 'The fourth number is less than 1 or greater than 59. Please re-enter number 4. ';}
    else 
    {$number4 = mysqli_real_escape_string($dbc,trim($_POST['number4']));}

    if (empty($_POST['number5']))
    {$errors[] = 'Enter the fifth number.' ; }
    elseif ($_POST['number5'] > 59 || $_POST['number5'] <1)
    {$errors[] = 'The fifth number is less than 1 or greater than 59. Please re-enter number 5. ';}
    else 
    {$number5 = mysqli_real_escape_string($dbc,trim($_POST['number5']));}

    $expectedValue = (round($TicketCost - 0.01610358759,2));


    

    if (empty($errors))
    {
        $q = "INSERT INTO euromillions (TicketCost, number1, number2, number3, number4, number5, expectedValue ) VALUES ('$TicketCost','$number1','$number2','$number3','$number4','$number5','$expectedValue')";
        $r = mysqli_query($dbc,$q);

        if($r)
        {
            echo"Your expected loss is: £";
            echo(round($TicketCost - 0.01610358759,2) . "<br>");

        }
    
        mysqli_close($dbc);
        exit();    

    }

    else
    {
        echo '<h1>Error!</h1>
        <p id="err_msg">The folloiwng error(s) occurred:<br>';
        foreach($errors as $msg )
        {
            echo " - $msg<br>";

        }
        echo 'Please try again </p>';
        mysqli_close($dbc);

    }

}
?> 

<h1>EuroMillions</h1>
<form action="lottery.php" method="POST">
<p>
Cost of ticket : <input type="text" name="TicketCost" value="<?php if ( isset($_POST['TicketCost'])) echo $_POST['TicketCost'];?>"></p>
<p>Enter number 1: <input type="text" name="number1" value="<?php if (isset($_POST['number1'])) echo $_POST['number1'];?>">   </p>
<p>Enter number 2: <input type="text" name="number2" value="<?php if (isset($_POST['number2'])) echo $_POST['number2'];?>">   </p>
<p>Enter number 3: <input type="text" name="number3" value="<?php if (isset($_POST['number3'])) echo $_POST['number3'];?>">   </p>
<p>Enter number 4: <input type="text" name="number4" value="<?php if (isset($_POST['number4'])) echo $_POST['number4'];?>">   </p>
<p>Enter number 5: <input type="text" name="number5" value="<?php if (isset($_POST['number5'])) echo $_POST['number5'];?>">   </p>
<p><input type="submit" value="Submit"></p>
</form>