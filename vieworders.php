<?php
  $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
?>
<html>
<head>
	<title>"BoB order views"</title>
</head>
<body>
	<h1>"bob's customer review"</h1>
	<h2>"custoemr orders"</h2>
	<?php
		@$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", "rb");



 echo  nl2br( fread($fp, filesize("$DOCUMENT_ROOT/../orders/orders.txt")));

 echo "Final postion of the file pointer is ".(ftell($fp));

rewind($fp);

echo "New postion of the file pointer is ".(ftell($fp));

print("<br/>");

printf("New postion of the ifle opinter is %2\$.2f,%1\$.3f", 122,78);

printf("<br/>");

$mystr = strtoupper("This Is am good 22 testing %2\$.f,%1\$.f");

$mystr = sprintf($mystr, 22,33);

echo($mystr);

echo("<br/>");

$sal = addslashes("this \"is'di\asdf mad,ad[");


echo($sal);

echo("<br/>");
echo stripcslashes($sal);


echo("<br/>");

 fclose($fp);

echo("<br/>");

$email = "wujian@163.com";
// $email = explode("@", $email);

// echo($email[1]);

echo("<br/>");
//echo implode("@", $email);
//
//
//
//

try
{
	throw new Exception("Error Processing Request by wujian",32);
	
}
catch(Exception $ex)
{
   echo $ex;
}

class Page{

public $name="wujian";

public $Year = 38;

public function GetName()
{

   return $this->$name;
}

}

$p = new ReflectionClass("Page");
echo "<pre>". $p. "</pre>";

echo(dirname(__FILE__)."<br/>");

echo(strpos($email,"163"));

print("<br/>");
print("<br/>");

function fn(){
	echo "$Val1"."mm<br/>";
	$Val1 = "s1";
	echo "$Val1"."<br/>";
}

$Val1 = "s2";
fn();

echo "$Val1"."<br/>";

	?>



	<a href="orderform.html">Go to home</a>
</body>
</html>

