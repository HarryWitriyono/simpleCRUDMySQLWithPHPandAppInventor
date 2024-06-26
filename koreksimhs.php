<?php 
include('koneksi.db.php');
if (!$koneksi) {
    exit();
}
if (isset($_GET['ID'])) {
$ID=mysqli_real_escape_string($koneksi,$_GET['ID']);
$Nama=mysqli_real_escape_string($koneksi,$_GET['Nama']);
$Email=mysqli_real_escape_string($koneksi,$_GET['Email']);
$Phone=mysqli_real_escape_string($koneksi,$_GET['Phone']);
$sql="SELECT * FROM `students` WHERE ID='".$ID."'";
$q=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_array($q)
if (!empty($r)) {
	$sql="UPDATE `students` SET Nama`='".$Nama."',`Email`='".$Email."',`Phone`='".$Phone."' WHERE `ID`='".$ID."'";
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo "Rekord sudah tersimpan !";
	} else {
		echo "Rekord gagal tersimpan !";
	}
} else {
	echo "Rekord yang akan dikoreksi tidak ditemukan !";
}
?>