<?php 
include('header.html');
if (isset($errors)&& !empty($errors))
{
    echo ' <p id="err_msg">Oops! there was a problem:<br>';
    foreach ($errors as $msg )
    {
        echo " - $msg <br>";
    }
    echo 'Please try again or register <a href="register.php">here</a></p>';
}

?>
<form action="login_action.php" method="POST">
<dl>
<dt>Email   :     <input type="text" name="email"><dd>
<dt>Password: <input type="password" name="pass"><dd>
</dl>
<button type="submit">Login</button>
</form>

