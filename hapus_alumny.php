<?php 
	
	include 'koneksi.php';
	$NIS=$_GET['NIS'];
	$sql =mysql_query("DELETE FROM siswa where NIS='$NIS'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_alumny.php';
        </script>
        <?php
    }

 ?>