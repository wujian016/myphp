<?php

session_start();
$_SESSION['sess_var'] = "hello world!";
 
 echo 'The content of SESSION[\'sess_var\'] is  '. $_SESSION['sess_var']. '<br/>';


unset($_SESSION['sess_var']);

// session_write_close();

 // $_SESSION['sess_var'] = array();
//session_unregister();

?>
<a href='page3.php'>Next Page3</a>