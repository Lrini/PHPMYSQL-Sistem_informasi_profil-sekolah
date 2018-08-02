<?php 

	include 'koneksi.php';
	$id_pendaftaran = $_GET['id_pendaftaran'];

	$sql = mysql_query("UPDATE tbl_pendaftaran set konfirmasi = '1' where id_pendaftaran='$id_pendaftaran'");
	if($sql){
		?>
		<script type="text/javascript">
			alert('sukses di konfirmasi');window.location='pendaftaran.php';
		</script>
		<?php

	}

 ?>