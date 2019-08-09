<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="col-lg">
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-0">
                <div class="card border-left-info shadow h-400 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-item-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Executive</div>
                                <div class="text-md text-gray-800 mb-4">Untuk memesan tiket kereta kelas executive silahkan tekan tombol dibawah ini. </div>
                                <div class="text-md text-gray-800">
                                    <a href="<?= base_url('transaksi/executive'); ?>" class="text-md text-gray-800 btn btn-outline-info">
                                        <i class="fas fa-hand-point-right"></i> Lihat</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <img class="img mt-4" src="<?= base_url('assets/img/thumbs/kai.svg') ?>" width="120px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-0">
                <div class="card border-left-success shadow h-400 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-item-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Bisnis</div>
                                <div class="text-md text-gray-800 mb-4">Untuk memesan tiket kereta kelas bisnis silahkan tekan tombol dibawah ini. </div>
                                <div class="text-md text-gray-800">
                                    <a href="<?= base_url('transaksi/bisnis'); ?>" class="text-md text-gray-800 btn btn-outline-success">
                                        <i class="fas fa-hand-point-right"></i> Lihat</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <img class="img mt-4" src="<?= base_url('assets/img/thumbs/kai.svg') ?>" width="120px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->