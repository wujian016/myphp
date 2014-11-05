<html>
<head>
	<title>Book-O-Rama Catalog Results</title>
</head>
<body>
	<h1>Book-O-Rama Search Results</h1>
<?php
  $searchtype = trim($_POST['searchtype']);
  $searchterm = trim($_POST['searchterm']);
  if(!$searchtype || !$searchterm){
  	echo 'You have not entered search details. Please go back and try again.';
  	exit;
  }

echo $searchterm."<br/>";
  if(!get_magic_quotes_gpc()){
  	$searchtype = addslashes($searchtype);
  	$searchterm = trim(addslashes($searchterm));
  }

echo $searchterm."<br/>";

  @ $db = new mysqli('localhost',"bookorama",'123456','books');
  if(mysqli_connect_errno()){
  	echo 'Error: Could not connect to database, please try again later.';
  	exit;
  }

  $query = "select * from books where ". $searchtype." like '%". $searchterm. "%'";

  // $result = $db->query($query);
  $result = mysqli_query($db, $query); 


  $num_results = $result->num_rows;

  echo "<p>Number of books found: ". $num_results."</p>";

  for($i = 0;$i <$num_results; $i++){

  	$row =$result->fetch_assoc();
  	echo "<p><strong>". ($i+1). ". Title: ";
  	echo htmlspecialchars(stripcslashes($row['title']));
  	echo "</strong><br/>Author: ";
  	echo stripslashes($row['author']);
  	echo "<br/>ISBN: ";
  	echo stripcslashes($row['isbn']);
  	echo "<br/>Price: ";
  	echo stripslashes($row['price']);
  	echo "</p>";

  }

  $result->free();
  $db->close();
?>
</body>
</html>