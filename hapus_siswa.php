<?php 
	
	include 'koneksi.php';
	$nis=$_GET['nis'];
	$sql =mysql_query("DELETE FROM t_siswa where nis='$nis'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_siswa.php';
        </script>
        <?php
    }

 ?>