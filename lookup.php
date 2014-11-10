<html>
<head>
	<title>Look up</title>
</head>
<h1>Look up</h1>
<?php

echo(__FILE__)."<br/>";
echo(dirname(__FILE__))."<br/>";
define("MYFOLDER", dirname(__FILE__));
echo(MYFOLDER."<br/>");
echo dirname(MYFOLDER."<br/>");
if (file_exists(MYFOLDER))
{
	echo "has file!<br/>";
}
else{
	echo "no file<br/>";
}
//$myvars = "mayf<br/>";
function testfun(){
	global $myvars;
	$myvars = "rosce wu ma<br/>";
} 
echo '<br/>*******<br/>';
echo '<br/>';
print_r($_GET); 
echo '<br/>*******<br/>';
echo '<br/>*******<br/>';
echo '<br/>c9<br/>';

// $no_unset = array( 'GLOBALS', '_GET', '_POST', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES', 'table_prefix' );

// 	$input = array_merge( $_GET, $_POST, $_COOKIE, $_SERVER, $_ENV, $_FILES, isset( $_SESSION ) && is_array( $_SESSION ) ? $_SESSION : array() );
// 	foreach ( $input as $k => $v ){

// 		echo "$k:"."$v" ."<br/>";
// echo "-----------<br/>";
// 		if ( in_array( $k, $no_unset ))
// 		{
// 		  echo "$k:" . "<br/>";
// 		}
// echo "-----------<br/>";
// 	}
	 


// echo '<br/>*******<br/>';

testfun();
echo $myvars;

echo date('c')."<br/>";
echo mktime()."<br/>";
echo time()."<br/>";
echo date("U")."<br/>";
echo "<br/>";

$today = getdate();
print_r($today);


function setGloble($v){
  global $g_val;
  $g_val = $v;
}

echo '<br/>*******<br/>';
setGloble("mal");

echo "$g_val" ."<br/>*******<br/>";


$url = parse_url("http://www.81222.com");
echo $url['host'];
 
 echo  "<br/><br/>". microtime()."<br/>";
 
 echo  "<br/><br/>". number_format(microtime(true),10,".","")."<br/>";

 $id  = GregorianToJD(9, 18, 1582);
 echo JDToJulian($id)."<br/>";

// echo gethostbyname($url['host']);

	/*$url = "http://www.81222.com";

	$contents = file_get_contents($url);
*/
	echo "<pre>";

echo strftime("%Y$%B$%d$<br/>");

	//echo $contents;

	echo "</pre>";
 
// $email=explode('@', 'wujian016@163.com');
// $emailhost = $email[1];

// if(!dns_get_mx($emailhost,$maxe)){


// }

// foreach ($maxe as $mx) {
// 	echo $mx;
// }
// 
 $cook = $_COOKIE['username'];

if(!$cook){

setcookie("username","wujian");
}else
{

echo $cook;
}

session_start();



echo "s". SID."s";

echo "<br/><br/>";

if(isset($_SESSION['year'])){
echo $_SESSION['year'];
$_SESSION = array();
    //unset($_SESSION['year']);
}else
{
$_SESSION['year'] = time();
}

echo SID;
session_destroy();

?>
</html>