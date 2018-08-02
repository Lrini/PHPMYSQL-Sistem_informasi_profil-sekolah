<?php
error_reporting(0);
include("koneksi.php");
session_start();

$_SESSION['Nam_admin']='';

session_destroy();

echo'<script>alert("Berhasil keluar");window.location="login.php"</script>';

?>