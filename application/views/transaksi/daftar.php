<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="row justify-content-center">
        <div class="col-4">
            <!-- <h3>Daftar Penumpang</h3><br> -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-8">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="cari penumpang ..." autocomplete="off">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info" id="tombolCari">cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if (empty($penumpang)) : ?>
                <div class="alert alert-danger alert-dismissible fade show">Data penumpang
                    <strong>tidak ditemukan</strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($penumpang as $pas) : ?>
                    <li class="list-group-item">
                        <?= $pas['nama']; ?>
                        <a href="<?= base_url(); ?>transaksi/detail/<?= $pas['id']; ?> " class="badge badge-primary float-right mr-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->