<?php
$page_title = 'GambCalc - Register';
include('header.html');
if ( $_SERVER['REQUEST_METHOD']=='POST')

{
    require ('db_connection.php');
    $errors = array();

    if (empty($_POST['email']))
    {$errors[] = 'Enter your email.' ; }
    else 
    {$e = mysqli_real_escape_string($dbc,trim($_POST['email']));}

    if (empty($_POST['pass']))
    {$errors[] = 'Enter your password.' ; }
    else 
    {$p = mysqli_real_escape_string($dbc,trim($_POST['pass']));}

    if (empty($errors))
    {
        $q = "SELECT user_id FROM users WHERE email='$e'";
        $r = mysqli_query($dbc,$q);
        if (mysqli_num_rows($r) != 0)
         $errors[] = 'Email address already registered. <a href="login.php">Login</a>';
    }

    if (empty($errors))
    {
        $q = "INSERT INTO users (email, pass) VALUES ('$e',SHA1('$p'))";
        $r = mysqli_query($dbc,$q);

        if($r)
        {
            echo '<h1>Registered!</h1> 
            <p><a href="login.php">Login</a></p>';
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

<h1>Register</h1>
<form action="register.php" method="POST">
<p>
Email address : <input type="text" name="email"
value="<?php if ( isset($_POST['email']))
	echo $_POST['email'];?>">
</p>
<p>Password : <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>"></p>
<p><input type="submit" value="Register"></p>
</form>