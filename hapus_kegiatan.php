<?php 
	
	include 'koneksi.php';
	$id_kegiatan=$_GET['id_kegiatan'];
	$sql =mysql_query("DELETE FROM kagiatan where id_kegiatan='$id_kegiatan'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_kegiatan.php';
        </script>
        <?php
    }

 ?>
 