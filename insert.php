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

$sql="INSERT INTO `students`(`ID`, `Nama`, `Email`, `Phone`) VALUES ('".$ID."','".$Nama."','".$Email."','".$Phone."')";
$q=mysqli_query($koneksi,$sql);
if ($q) {
    echo "Rekord sudah tersimpan !";
} else {
    echo "Rekord gagal tersimpan !";
}
}
?>