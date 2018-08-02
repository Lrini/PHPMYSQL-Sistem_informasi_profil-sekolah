<?php 
	
	include 'koneksi.php';
	$kode_matpel=$_GET['kode_matpel'];
	$sql =mysql_query("DELETE FROM t_matpel where kode_matpel='$kode_matpel'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_mapel.php';
        </script>
        <?php
    }

 ?>