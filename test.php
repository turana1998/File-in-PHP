<?php
if (!isset($_POST['submit'])) {
  $total = count($_FILES['file']['name']);
  for( $i=0 ; $i < $total ; $i++ ) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'][$i];
  $fileTmpName = $_FILES['file']['tmp_name'][$i];
  $fileSize = $_FILES['file']['size'][$i];
  $fileType = $_FILES['file']['type'][$i];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png', 'gif');
  if (in_array($fileActualExt, $allowed)) {
      if ($fileSize < 9000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'images/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
        header("Location:index.php");
      } 
  } 
}}
?>