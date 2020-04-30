<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  require ( 'db_connection.php' ) ;
  require ( 'login_tools.php' ) ;
  list ( $check, $data ) = validate ( $dbc, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;
  if ( $check )  
  {
    session_start();
    $_SESSION[ 'user_id' ] = $data[ 'user_id' ] ;
    load('home.php');
  }
  else { $errors = $data; } 
  mysqli_close( $dbc ) ; 
}
include ( 'login.php' ) ;
?>
