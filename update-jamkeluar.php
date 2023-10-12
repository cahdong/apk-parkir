<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "UPDATE tb_parkir SET jam_keluar = NOW() WHERE id_parkir = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>