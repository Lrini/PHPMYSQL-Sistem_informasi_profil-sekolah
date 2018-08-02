<?php
   include 'koneksi.php';
                                  $sql = mysql_query("SELECT * FROM tbl_informasi where tanggal ");
                                  while ($row=mysql_fetch_array($sql)) {


                                      echo $row['id_informasi'];
                                      echo $row['judul'] ;
                                      echo $row['tanggal'];
                                      echo $row['isi'];
								  }

 
?>