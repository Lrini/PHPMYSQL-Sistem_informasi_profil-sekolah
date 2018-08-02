<?php 
	
	include 'koneksi.php';
	$id_galeri=$_GET['id_galeri'];
	$sql =mysql_query("DELETE FROM galeri where id_galeri='$id_galeri'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_galeri.php';
        </script>
        <?php
    }

 ?>