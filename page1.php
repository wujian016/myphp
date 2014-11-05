<?php

session_start();
$_SESSION['sess_var'] = "hello world!";
 
 echo '<div id="ct">';
 echo 'The content of SESSION[\'sess_var\'] is  '. $_SESSION['sess_var']. '<br/>';
 echo '</div>';



?>

<a href='page2.php'>Next Page2</a>