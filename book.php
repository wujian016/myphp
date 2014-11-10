<html>
<head>
	<title>Book-O-Rama Insert Book Results</title>
</head>
<body>
	<h1>Book-O-Rama Insert Book Results</h1>
<?php
  $isbn = $_POST['isbn'];
  $author = $_POST['author'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  if(!$isbn || !$author || !$title || !$price){
  	echo 'You have not entered all required details. Please go back and try again.';
  	exit;
  }
  if(!get_magic_quotes_gpc()){
    $isbn = addslashes($isbn);
    $author = addslashes($author);
    $title = addslashes($title);
    $price = doubleval($price);
  }

 echo '<ul><li>'. $isbn .'</li>';
 echo '<li>'. $author .'</li>';
 echo '<li>'. $author .'</li>';
 echo '<li>'. $title .'</li>';
 echo '<li>'. $price .'</li></ul>';


  /* $query = "insert into books values ('". $isbn ."','" .$author."','" .$title ."','" .$price ."')";
  


   $result = $db->query($query);
  // $result = mysqli_query($db, $query); 


 
 if($result){

  echo $db -> affected_rows. " book inserted into database.";
 }else
 {
  echo "An error has occurred.  The item was not added.";
 }*/

  //echo "<p>Number of books found: ". $num_results."</p>";

  //$db->close();
?>
</body>
</html>