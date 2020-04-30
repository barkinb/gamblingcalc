<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'GambCalc' ;
include ( 'header.html' ) ;

# Display body section.
echo "<h1>HOME</h1><p>You are now logged in</p>"; 
?>