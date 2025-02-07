<?php

    require_once('koneksi.php');
    $sql = "SELECT * FROM data_sekolah";
    $result = $conn->query($sql);
    $ppdb_online = $result->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">">
    

</head>
<body>

    <div class="container-fluid">

        <div class="card">
            <center>
                <img src="head1.png" width="60%">
            </center>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="text-center">DAFTAR SEKOLAH</h3>
            </div>
            <div class="card-body">
                <p>Berikut ini merupakan daftar SMP yang mengikuti PPDB Online kota Karanganyar. Ditampilkan alamat serta identitas dari tiap sekolah. Untuk lebih lanjut silahkan klik lihat profil pada masing-masing sekolah.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr class="text-info" align="center">
                    <th rowspan="2" style="vertical-align: midle">#</th>
                    <th>KODE</th>
                    <th>NAMA SEKOLAH</th>
                    <th>KELURAHAN</th>
                    <th>KECAMATAN</th>
                    <th>STATUS SEKOLAH</th>
                    <th>IKUT PPDB</th>
                    <th>PROFIL</th>
                </tr>
                <tr>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th><input type="text" class="form-control"></th>
                    <th></th>
                    
                </tr>
                <?php   
                    foreach($ppdb_online as $key => $row) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $row['kode']; ?></td>
                        <td><?= $row['nama_sekolah']; ?></td>
                        <td><?= $row['kelurahan']; ?></td>
                        <td><?= $row['kecamatan']; ?></td>
                        <!-- <td><?= $row['status_sekolah']; ?></td> -->

                        <td>
                            <?php if ($row['status_sekolah'] == 'negeri') { ?>
                                <div class="badge bg-success">Negeri</div>
                            <?php } else { ?>
                                <div class="badge bg-primary"> swasta</div>
                            <?php } ?>
                        </td>

                        <td>
                            <?php if ($row['ikut_ppdb'] == 'iya') { ?>
                                <div class="badge bg-success">iya</div>
                            <?php } else { ?>
                                <div class="badge bg-primary">tidak</div>
                            <?php } ?>
                        </td>


                        <!-- <td><?= $row['ikut_ppdb']; ?></td> -->
                        <td>
                            <a href="#" class="btn btn-info text-white">Lihat Profil</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>