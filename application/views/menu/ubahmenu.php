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
                    <input type="hidden" name="id" id="id" value="<?= $menu['id']; ?>">
                    <div class="form-group">
                        <input type="text" name="menu" id="menu" class="form-control border-info" value="<?= $menu['menu']; ?>">
                        <small class="form-text text-danger"><?= form_error('menu'); ?></small>
                    </div>

                    <button type="submit" class="btn btn-info mt-1">Ubah</button>
            </div>

            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->