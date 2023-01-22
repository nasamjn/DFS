
<html>
	<head>
	<title>FORM ADMIN</title>
	</head>
	<body>
	<center>
	<h2>FORM ADMIN</h2>
	
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	
	<tr>
		<td>Nama Program</td><td>:</td><td> <input type="text" name="nama_program" required><br><br></td>
	</tr>
	<tr>
		<td>Tarikh</td><td>:</td><td> <input type="date" name="tarikh" required><br><br></td>
	</tr>
	<tr>
		<td>Masa</td><td>:</td><td> <input type="time" name="masa" required><br><br></td>
	</tr>
	<tr>
		<td>Tempat</td><td>:</td><td> <input type="text" name="tempat" required><br><br></td>
	</tr>
	
	<tr>
		<td>Penganjur</td><td>:</td><td> <input type="text" name="penganjur" required><br><br></td>
	</tr>
	<tr>
		<td>Sasaran</td><td>:</td><td> <input type="text" name="sasaran" required><br><br></td>
	</tr>
	<tr>
		<td>Objektif</td><td>:</td><td> <input type="text" name="objektif" required><br><br></td>
	</tr>
	<tr>
		<td>Laporan</td><td>:</td><td> <input type="text" name="laporan" required><br><br></td>
	</tr>
	<tr>
		<td>Gambar</td><td>:</td><td> <input type="file" name="gambar" required><br><br></td>
	</tr>
	<tr>
		<td>Sijil</td><td>:</td><td> <input type="file" name="sijil" required><br><br></td>
	</tr>
	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
	</tr>

	
	

	</form>
	</tr>
	</table>

	<br>

	<a href="adminhome.php">HOMEPAGE</a>
	</body>


<?php
	include('config.php');
	if (isset($_POST['hantar'])){
	
		$nama_program=$_POST['nama_program'];
		$tarikh=$_POST['tarikh'];
		$masa=$_POST['masa'];
		$tempat=$_POST['tempat'];
		$penganjur=$_POST['penganjur'];
		$sasaran=$_POST['sasaran'];
		$objektif=$_POST['objektif'];
		$laporan=$_POST['laporan'];
		$gambar=$_POST['gambar'];

		$papar=mysqli_query($conn,"INSERT INTO dfs_m SET
		nama_program='".$nama_program."',
		tarikh='".$tarikh."',
		masa='".$masa."',
		tempat='".$tempat."',
		penganjur='".$penganjur."',
		sasaran='".$sasaran."',
		objektif='".$objektif."',
		laporan='".$laporan."',
        gambar='".$gambar."'");

        if (isset($_POST["submit"])) {
  

		 $id= $_FILES["file"]["name"];

		 $tname=$_FILES["file"]["tmp_name"];

		 $upload= '\MeonWebBase\image';

		 $namasijil='Sijil Kecemerlangan';

		move_uploaded_file($id, $upload.'/'.$id);

		$query= "INSERT INTO dfs_m (id,file) VALUES (NULL,'$id')";

		if (mysqli_query($conn,$query)) {
		  
		  echo "file berjaya di upload";
		}

		else{

		  echo "error";
		}



		}

	header("location:adminhome.php");
	}


?>
</html>