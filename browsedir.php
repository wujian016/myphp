<html>
<head>
	<title>Browse dir</title>
</head>
<body>
	<h1>Borwes dir</h1>
	<?php
		$current_dir="/uploads/";
		$dir = dir($current_dir);



		echo "<p>Listing:</p><ul>";

		while (false !== ($file = $dir->read())) {
			if($file != "." && $file != ".."){
				echo "<li>". $file ."</li>"; //change in c6
			}
		}

		echo "</ul>";

		$dir->close();

		//change in c10

		$files = scandir($current_dir,1);

echo "<p>Listing 2:</p><ul>";

		foreach ($files as $file) {
			if($file != "." && $file != ".."){
				echo "<li>".filesize("/uploads/".$file)."</li>";
			}
		}  



		echo "</ul>";

		chdir("/uploads/");

		exec("ls -al",$result);

		echo "<pre>";
		foreach ($result as $line) {
			echo "$line\n";
		}

		echo "</pre>";
 

		echo "<pre>";
		passthru('ls -al');

		echo "</pre>";


		echo "<pre>";
		$result = system( escapeshellcmd('ls -al'));

		echo "</pre>";
 
echo getenv("HTTP_REFERER");

	?>
</body>
</html>