<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEM FILE</title>
</head>
<body>

  <form action="" method="post" enctype="multipart/form-data">


<input type="file" name="file">

<input type="submit" name="submit">

</form>



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



?>
<br>



<a download="<?php echo $namasijil;?>" href="\MeonWebBase\images/<?php echo $id;?>"> Click Here To Download </a>
</body>
</html>