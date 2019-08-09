<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5">




                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $penumpang['id']; ?>">
                    <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control border-info" value="<?= $penumpang['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control border-info" id="telepon" name="telepon" value="<?= $penumpang['telepon']; ?>">
                        <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select class="form-control border-info text-center" id="gender" name="gender">
                                    <option value="<?= $penumpang['gender']; ?>"><?= $penumpang['gender']; ?></option>
                                    <?php foreach ($gender as $g) : ?>
                                        <option value="<?= $g; ?>"><?= $g; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('gender'); ?></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control border-info text-center" id="jam" name="jam">
                                    <option value="<?= $penumpang['jam']; ?>"><?= $penumpang['jam']; ?></option>
                                    <?php foreach ($jam as $j) : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('jam'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control border-info" id="tanggal" name="tanggal" value="<?= $penumpang['tanggal']; ?>">
                        <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                    </div>

                    <input type="hidden" name="harga" id="harga" class="form-control border-info" value="<?= $penumpang['harga'] = 150000; ?>">
                    <input type="hidden" name="jurusan" id="jurusan" class="form-control border-info" value="<?= $penumpang['jurusan'] = 'Pasar Senen'; ?>">
                    <input type="hidden" name="kelas" id="kelas" class="form-control border-info" value="<?= $penumpang['kelas'] = 'Eksekutif'; ?>">
                    <button type="submit" name="tambah" class="btn btn-block btn-info mt-1">Ubah</button>
            </div>



            </form>



        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->