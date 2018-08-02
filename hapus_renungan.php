<?php 
	
	include 'koneksi.php';
	$id_renungan=$_GET['id_renungan'];
	$sql =mysql_query("DELETE FROM tbl_renungan where id_renungan='$id_renungan'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_renungan.php';
        </script>
        <?php
    }

 ?>
 