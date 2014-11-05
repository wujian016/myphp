<html>
<head>
	<title>Book-O-Rama upload file</title>
</head>
<body>
	<h1>Book-O-Rama upload file</h1>
<?php
 
 // error_reporting(E_ALL | E_STRICT);

  if($_FILES['userfile']['error'] > 0)
  {
    echo 'Problem:';
    switch ($_FILES['userfile']['error']) 
    {
      case 1:
        echo 'File exceeded upload_max_filesize';
        break;
      case 2: echo 'File exceeded file_max_size';
        break;
      default:
        # code...
        break;
    }
    exit;
  }

  echo $_FILES['userfile']['type']."<br/>";

  $upfile = '/uploads/'. $_FILES['userfile']['name'];

  echo $upfile ."<br/>";


  if(is_uploaded_file($_FILES['userfile']['tmp_name']))
  {
    if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
    {
      echo 'Problem: Could not move file to directory.';
      exit;
    }
  }else
  {
    echo 'Problem: attack:' . $_FILES['userfile']['name'];
    exit;
  }

  echo 'FIle uploaded successfully<br/><br/>';


  /*changeImageSize($upfile);

  function changeImageSize($filename){
    $original_info = getimagesize($filename);
$original_w = $original_info[0];
$original_h = $original_info[1];
$original_img = imagecreatefromjpg($filename);
$thumb_w = 100;
$thumb_h = 100;
$thumb_img = imagecreatetruecolor($thumb_w, $thumb_h);
imagecopyresampled($thumb_img, $original_img,
                   0, 0,
                   0, 0,
                   $thumb_w, $thumb_h,
                   $original_w, $original_h);
imagejpeg($thumb_img, $thumb_filename);
destroyimage($thumb_img);
destroyimage($original_img);
  }
*/
 ?>
</body>
</html>