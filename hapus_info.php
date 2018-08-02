<?php 
	
	include 'koneksi.php';
	$id_informasi=$_GET['id_informasi'];
	$sql =mysql_query("DELETE FROM tbl_informasi where id_informasi='$id_informasi'");
	if($sql){
        ?>
        <script type="text/javascript">
            alert("sukses");window.location='tabel_informasi.php';
        </script>
        <?php
    }

 ?>
 