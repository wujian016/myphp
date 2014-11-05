<?php

 $tireqtystr = $_POST['tireqty'];
 $oilqtystr = $_POST['oilqty'];
 $sparkqtystr = $_POST['sparkqty'];
 $totalqty = 0;
 $totalamount = (float)$totalqty;
 $varname = 'gilrname';
 $$varname = "sex gilr";

  define(TIREPRICE, 100);
  define(OILPRICE, 10);
  define(SPARKPRICE, 2);


?>
<html>
<head>
	<title>THis is BOB's site</title>
</head>
<body>
	<h1>Bob 's auto Parts</h1>
	<h2>
		This is Results</h2>
		<script  language="php">
/*		this is commont
		are youe*/
 echo "<p>Wujian's name</p>"; 
		</script>
		 <?php
echo date("H:i, jS F Y");
		 ?>

<?php
echo $tireqtystr."tirqty<br/>";
echo $oilqtystr."oilqty<br/>";
echo "$sparkqtystr mysparkqty<br/>";
echo "$gilrname";
echo TIREPRICE;

$totalqty = $tireqtystr + $oilqtystr + $sparkqtystr;
$totalamount = $tireqtystr * TIREPRICE
		+ $oilqtystr * OILPRICE
		+ $sparkqtystr * SPARKPRICE;
echo "<br/>";
echo "totoal qty $totalqty <br/>";
echo "totalamount $totalamount <br/>";

$taxrate = 0.10;
$totalamount = $totalamount * (1+$taxrate);

echo "includ tax is :".number_format($totalamount,2)."<br/>";

$a = 5;
echo gettype($a).'<br/>';
settype($a, "double");
echo(gettype($a)."<br/>");
print(gettype($a)).'<br/>';
echo(is_bool(true).'<br/>');
echo(is_double($a).'<br/>');
$c = "88";
$d = intval($c);
echo(intval("883838yd.sayy123").'<br/>');
echo($_SERVER["DOCUMENT_ROOT"].'DOCUMENT_ROOT<br/>');
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
@$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", "ab");

$outputstring = date("F")."\t".$tireqtystr." tires \t".$oilqtystr." oil\t".$sparkqtystr." sparks\n";

flock($fp, LOCK_UN);

if(!$fp){
	echo "<p><strong>Your order need qty</strong></p>";
	exit;
}

fwrite($fp, $outputstring, strlen($outputstring));

fclose($fp);

 $r = range(1, 10);

echo "$r[0] $r[6]";

$pds[0] = "mmm";
$pds[1] = "xxx";
$pds[2] = "oooo";
$pds[3] = "wujian";
echo "$pds[0] $pds[1] $pds[2] $pds[3]";
echo "<br/>";
foreach ($pds as $key => $value) {
  echo $key. "-" . $value. ",";
}
 
$spac = array('tires'=>100,'oil'=>10,'spark plugs'=>30);

foreach ($spac as $ke => $valu) {
  echo $ke. "-" . $valu. ",";
}

echo $spac['tires']."<br/>";

$array = array('key1'=>"value1", "key2"=>"value2","key3"=>"value3");
extract($array, EXTR_PREFIX_ALL,'my_prefix');
echo $my_prefix_key3."<br/>";
echo "<p><strong>Write order end</strong></p>";



// phpinfo();

/*echo <<<theEnd
 line 1
  line 2
  line 3
  theEnd;*/
?>

<a href="vieworders.php">view order</a>

</body>
</html>