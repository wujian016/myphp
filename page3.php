<?php



class employee{
  var $name;	
  var $employee_id;
}


$this_emp = new employee;
$this_emp->name = "wujian";
$this_emp->employee_id= 13;

$str = serialize($this_emp);
 
$new_object = unserialize($str);


echo $str."<br/>";

echo date('g:i a, j M Y',getlastmod());


echo $new_object->name;

echo get_current_user()."<br/>";

echo @fopen("http://www.812222.com", "r")."test<br/>";


session_start(); 
 
 echo 'The content of SESSION[\'sess_var\'] is  '. $_SESSION['sess_var']. '<br/>';

session_destroy();


?> 