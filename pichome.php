<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PIC PAGE PAGE</title>

	<style>
		table,tr,th{
  		border: 1px solid black;
  		border-collapse: collapse;
  		width: 1500px;
}
	</style>
</head>
<center>
<body>
<br>
<?php echo $_SESSION["username"] ?>
<br>

<h1>THIS IS PIC HOME PAGE</h1>
<br>
<table>
	<tr>
		<th>NAMA PROGRAM</th>
		<th>TARIKH</th>
		<th>TEMPAT</th>
		<th>MASA</th>
		<th>PENGANJUR</th>
		<th>SASARAN</th>
		<th>OBJEKTIF</th>
		<th>LAPORAN RINGKAS PROGRAM (PDF)</th>
		<th>GAMBAR PROGRAM</th>
		<th>FILE SIJIL (PDF)</th>
	</tr>

</table>

<br>

<a href="logout.php">Logout</a>

</body></center>
</html>
