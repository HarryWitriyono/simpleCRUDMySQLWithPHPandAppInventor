<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Daftar Mahasiswa</h2>
  <p>Berikut ini daftar mahasiswa yang telah daftar :</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Email</th>
		<th>No. Handphone</th>
      </tr>
    </thead>
    <tbody>
	<?php include('koneksi.db.php');
	$sql="SELECT * FROM `students`";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (!empty($r)) {
		do {
	?>
      <tr>
        <td><?php echo $r['ID'];?></td>
        <td><?php echo $r['Nama'];?></td>
        <td><?php echo $r['Email'];?></td>
		<td><?php echo $r['Phone'];?></td>
      </tr>
	<?php 
		} while($r=mysqli_fetch_array($q));
	} else {
	?>
	  <tr>
        <td colspan=4><b>Rekord tabel tidak ada !</b></td>
	  </tr>
	<?php
	}
	?>
	</tbody>
  </table>
</div>

</body>
</html>