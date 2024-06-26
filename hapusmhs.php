<?php 
if (isset($_GET['ID'])) {
	include('koneksi.db.php');
	$ID=mysqli_real_escape_string($koneksi,$_GET['ID']);
	$sql="DELETE FROM `students` WHERE ID='".$ID."'";
	$q=mysqli_query($koneksi,$sql);
	if ($q){
		echo "Rekord dengan ID : ".$ID." sudah dihapus !";
	} else {
		echo "Rekord gagal dihapus !";
	}
}
?>