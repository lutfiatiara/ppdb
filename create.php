<?php

require_once('koneksi.php');

if(isset($_POST['Simpan'])){
    $kode = $_POST['kode'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $status_sekolah = $_POST['status_sekolah'];
    $ikut_ppdb= $_POST['ikut_ppdb'];
    $query="INSERT INTO 
        data_sekolah (kode,nama_sekolah,kelurahan,kecamatan,status_sekolah,ikut_ppdb)
        VALUES('$kode','$nama_sekolah','$kelurahan','$kecamatan','$status_sekolah','$ikut_ppdb')";
    mysqli_query($conn, $query);
    echo "<script> alert('Berhasil input data siswa');
    window.location.replace('index.php');
    </script>";
}


