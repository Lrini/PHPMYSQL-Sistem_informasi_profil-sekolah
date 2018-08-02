<?php 
	
	include 'koneksi.php';
	$id_nilai=$_GET['id_nilai'];
	$sql =mysql_query("DELETE FROM t_nilai where id_nilai='$id_nilai'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_nilai.php';
        </script>
        <?php
    }

 ?>