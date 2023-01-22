<?php

include 'config.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
else{
	$id="";
}

$query=mysqli_query($conn,"DELETE FROM dfs_m WHERE id='".$id."' ");

header('location:adminhome.php');
?>