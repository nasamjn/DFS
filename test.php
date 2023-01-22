<html>
    <head>
        <title>PROJEK SEKOLAH</title>
    </head>
    
    <body>
    <center>
    <h2>INDEX 1</h2>
  
  <table border="1" width="500" align="center" cellspacing="2"
    cellpadding="1">
    <tr>
      <td>ID</td>
      <td>GAMBAR</td>
     </tr>



<!--CODING UTK PAPARAN GAMBAR DALAM TABLE-->
       <?php 
  include('config.php');
    $result=mysqli_query($conn,"SELECT*FROM dfs_m");
    while($row=mysqli_fetch_array($result)){
        $gambar=$row['gambar'];
        $filename = $row['gambar'];
        ?>


    <!--/////////////CRUCIAL CODING FOR DISPLAY IMAGE/////////////////-->
        <tr>
        <td>
        <img width="50%" src="./image/<?php echo $filename; ?>">
        </td>
        </tr>
    <!--//////////////////////////////////////////////////-->


        <?php
    }  ?>
    </table>
   
<a style="text-decoration: none;" href="upload.php">PAGE UPLOAD</a>
</center>

    </body>
</html>