<?php

include 'config.php';


if (isset($_POST["submit"])) {
  

 $id= $_FILES["file"]["name"];

 $tname=$_FILES["file"]["tmp_name"];

 $upload= '\MeonWebBase\images';

 $namasijil='Sijil Kecemerlangan';

move_uploaded_file($id, $upload.'/'.$id);

$sql= "INSERT INTO dfs_m (id,file) VALUES (NULL,'$id')";

if (mysqli_query($conn,$sql)) {
  
  echo "file berjaya di upload";
}

else{

  echo "error";
}



}

header('location:adminhome.php');
?>