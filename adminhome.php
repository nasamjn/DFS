<?php
	include('config.php');
?>

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
	<title>ADMIN PAGE</title>

	<style>
		table,tr,th,td{
			text-align: center;
  		border: 1px solid black;
  		border-collapse: collapse;
  		width: 1300px;
}
	</style>
</head>
<center>
<body>
<br>
<?php echo $_SESSION["username"] ?>
<br>

<h1>THIS IS ADMIN HOME PAGE</h1>
<br>
<table>
	<tr>
		<th>BIL</th>
		<th>NAMA PROGRAM</th>
		<th>TARIKH</th>
		<th>MASA</th>
		<th>TEMPAT</th>
		<th>PENGANJUR</th>
		<th>SASARAN</th>
		<th>OBJEKTIF</th>
		<th>LAPORAN RINGKAS PROGRAM (PDF)</th>
		<th>GAMBAR PROGRAM</th>
		<th>FILE SIJIL (PDF)</th>
		<th>PADAM REKOD</th>
	</tr>

<?php
	    
		$query=mysqli_query($conn, "SELECT * FROM dfs_m");
		while($row=mysqli_fetch_array($query)){
			 
		echo "
		<tr>
			<td>".$row['id']."</td>
			<td>".$row['nama_program']."</td>
			<td>".$row['tarikh']."</td>
			<td>".$row['masa']."</td>
			<td>".$row['tempat']."</td>
			<td>".$row['penganjur']."</td>
			<td>".$row['sasaran']."</td>
			<td>".$row['objektif']."</td>
			<td>".$row['laporan']."</td>
			<td>".$row['gambar']."</td>
			<td><a href=\MeonWebBase\images".$row['file']."/> Click Here To Download </a></td>
			<td>","<a  href=\"padam.php?id=".$row['id']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>

				
		</tr>
		";
		
		}
		?>		

	</table>

<br>

<a href="admin-form.php">TAMBAH REKOD</a>

<br>
<br>


<a href="logout.php">Logout</a>

</body></center>
</html>
