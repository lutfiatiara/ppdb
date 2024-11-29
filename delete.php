<?php

require_once('koneksi.php');
$id = $_GET['id'];

// echo $id;

$query = "DELETE FROM data_sekolah WHERE id=$id";
mysqli_query($conn, $query);
echo "<script> alert('Berhasil menghapus catatan dari halaman');
window.location.replace('index.php');
</script>";