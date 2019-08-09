<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/datepicker.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style type="text/css">
    #outtable {
        padding: 20px;
        border: 1px solid #e3e3e3;
        width: 650px;
        border-radius: 5px;
    }

    .short {
        width: 50px;
    }

    .normal {
        width: 150px;
    }

    /* thead th {
        text-align: center;
        padding: 10px;
    } */

    table {
        border-collapse: collapse;
        color: #5e5b5c;
    }

    tbody td {
        border-top: 0px solid #e3e3e3;
        padding: 20px;
    }

    tbody :nth-child(even) {
        background: #f6f5fa;
    }

    tbody :hover {
        background: #eae9f5;
    }
</style>

<body>
    <center>
        <h3>Tiketku</h3>
    </center>

    <div id="outtable" class="mt-3">
        <table>
            <thead>

                <tr>
                    <th class="mt-3 mr-5 p-2 text-center">
                        <div class="justify-content-center mb-3">
                            <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/ci-tugas/assets/img/images.png"; ?>" width="120px" alt=""><br>
                        </div>
                        <div class="h6 mb-0 font-weight-bold text-info text-uppercase mb-1"><?= $penumpang['nama']; ?></div>

                    </th>
                    <th class="mr-4">
                        <div class="text-md text-gray-800">Stasiun <?= $penumpang['jurusan']; ?></div>
                        <div class="text-md text-gray-800">Rp. <?= $penumpang['harga']; ?>,-</div>
                        <div class="text-md text-gray-800">Class <?= $penumpang['kelas']; ?></div>
                        <div class="h6 mb-0 text-gray-800 ">Pembelian Pada <?= date('d F Y', $penumpang['date']); ?></div>
                    </th>
                    <th>
                        <div class="text-md text-gray-800">Jam Pemberangkatan Kereta</div>
                        <div class="text-md text-gray-800"><?= date('H:i A', strtotime($penumpang['jam'])); ?></div>
                        <div class="text-md text-gray-800">Tanggal Pemberangkatan</div>
                        <div class="text-md text-gray-800"><?= date('d F Y', strtotime($penumpang['tanggal'])); ?></div>
                    </th>
                <tr class="py-4">
                    <th>

                    </th>
                </tr>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <p style="font-family: 'Times New Roman'; font-size: 12px;" class="text-right mt-2 mr-5">Indramayu, <?php echo date('d F Y'); ?></p>
</body>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/script.js"></script>

</html>