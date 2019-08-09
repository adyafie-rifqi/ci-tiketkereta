<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="col-xl-10 col-md-6 mb-0">
        <div class="card border-left-info shadow h-400 py-4">
            <div class="card-body">
                <div class="row no-gutters align-item-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-info text-uppercase mb-1"><?= $penumpang['nama']; ?></div>
                        <div class="text-md text-gray-800"><?= $penumpang['telepon']; ?></div>
                        <div class="text-md text-gray-800"><?= $penumpang['gender']; ?></div>
                        <div class="text-md text-gray-800">Rp. <?= $penumpang['harga']; ?>,-</div>
                        <div class="text-md text-gray-800">Class <?= $penumpang['kelas']; ?></div>
                        <div class="h6 mb-0 text-gray-800 ">Pembelian Pada <?= date('d F Y', $penumpang['date']); ?></div>
                    </div>
                    <div class="col-auto mr-5">
                        <div class="row-auto">
                            <img class="img-profile rounded-circle mb-2" src="<?= base_url('assets/img/') . $penumpang['image']; ?>" width="120px"><br>
                        </div>
                        <div class="row-auto text-center">
                            <a href="<?= base_url('transaksi/daftar') ?>" class="h6 mb-0 text-gray-800 align-item-right">Kembali</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row no-gutters align-item-center mt-2 mb-">
                    <div class="col text-center">
                        <div class="text-md text-gray-800">Tanggal Pemberangkatan</div>
                        <div class="text-md text-gray-800"><?= date('d F Y', strtotime($penumpang['tanggal'])); ?></div>
                    </div>
                    <div class="col text-center">
                        <div class="text-md text-gray-800">Jam Pemberangkatan Kereta</div>
                        <div class="text-md text-gray-800"><?= date('H:i A', strtotime($penumpang['jam'])); ?></div>
                    </div>
                    <div class="col text-center">
                        <div class="text-md text-gray-800">Stasiun</div>
                        <div class="text-md text-gray-800">Jatibarang (indramayu)</div>
                    </div>
                    <div class="col text-center">
                        <div class="text-md text-gray-800">Stasiun</div>
                        <div class="text-md text-gray-800"><?= $penumpang['jurusan']; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-right">
            <div class="col-lg-2 mt-3">
                <a href="<?= base_url('cetak/cetak/'); ?><?= $penumpang['id']; ?>" class="btn btn-outline-secondary btn-block"><i class="fas fa-print"></i> Print</a>
            </div>
        </div> -->
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->