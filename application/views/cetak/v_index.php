<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
</head>
<style type="text/css">
    #outtable {
        padding: 10px;
        border: 1px solid #e3e3e3;
        width: 1000px;
        border-radius: 5px;
    }

    .short {
        width: 50px;
    }

    .normal {
        width: 150px;
    }

    table {
        border-collapse: collapse;
        font-family: 'Times New Roman', Times, serif;
        color: #5e5b5c;
    }

    thead th {
        text-align: center;
        padding: 10px;
    }

    tbody td {
        text-align: center;
        border-top: 1px solid #e3e3e3;
        padding: 14px;
    }

    tbody tr:nth-child(even) {
        background: #f6f5fa;
    }

    tbody tr:hover {
        background: #eae9f5;
    }
</style>

<body style="font-family:'Times New Roman', Times, serif; font-size:12px;">
    <center>
        <h1><img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/ci-tugas/assets/img/images.png"; ?>" width="130px" alt="">Laporan</h1>
    </center>
    <p>Indramayu, <?php echo date('d F Y'); ?></p>
    </p>
    <br>
    <div id="outtable">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telephone</th>
                    <th>Jenis Kelamin</th>
                    <th>Harga Tiket</th>
                    <th>Kelas</th>
                    <th>Tanggal Beli</th>
                    <th>Tanggal Berangkat</th>
                    <th>Jam Berangkat</th>
                    <th>Stasiun</th>
                    <th>Stasiun Tujuan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($penumpang as $pas) : ?>
                    <tr>
                        <td> <?php echo $no++; ?></td>
                        <td> <?php echo $pas['nama']; ?></td>
                        <td> <?php echo $pas['telepon']; ?></td>
                        <td> <?php echo $pas['gender']; ?></td>
                        <td>Rp. <?php echo $pas['harga']; ?>,-</td>
                        <td> <?php echo $pas['kelas']; ?></td>
                        <td> <?php echo date('d F Y', $pas['date']); ?></td>
                        <td> <?php echo date('d F Y', strtotime($pas['tanggal'])); ?></td>
                        <td> <?php echo date('H:i A', strtotime($pas['jam'])); ?></td>
                        <td>Jatibarang</td>
                        <td> <?php echo $pas['jurusan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>