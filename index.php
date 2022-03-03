<?php 
	include 'koneksi1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include "koneksi1.php";
$id = (isset($_GET['id']))? (int) $_GET['id'] : 1;
$SqlQuery = mysqli_query($conn, "SELECT * FROM berita where id ='".$id."'");
while($row = mysqli_fetch_array($SqlQuery)){ 
if (mysql_num_rows($row) > 0) {
    $tjan = array();
    while($row = mysql_fetch_assoc($row)  ) {
    $tjan[] = $row['lihat'];
    }
    print_r($tjan);}
;}
?>
</body>
</html>