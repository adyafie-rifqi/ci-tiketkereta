 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">
         <?= $judul; ?> <?= $stasiun; ?>
     </h1>
     <div class="container">
         <div class="row">
             <div class="col-6 mx-auto">
                 <div class="card border-info">
                     <div class="card-header bg-info text-white">
                         Form Pesan Tiket
                     </div>
                     <div class="card-body">

                         <form action="" method="post">
                             <div class="form-group">
                                 <input type="text" name="nama" id="nama" class="form-control border-info" value="<?= set_value('nama'); ?>" placeholder="Nama Penumpang" autocomplete="off">
                                 <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                             </div>

                             <div class="form-group">
                                 <input type="text" class="form-control border-info" id="telepon" name="telepon" value="<?= set_value('telepon'); ?>" placeholder="No. Telepon" autocomplete="off">
                                 <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                             </div>

                             <div class="row">
                                 <div class="col-6">
                                     <div class="form-group">
                                         <select class="form-control border-info text-center" id="gender" name="gender" value="<?= set_value('gender'); ?>">
                                             <option value="">-- Pilih Jenis Kelamin --</option>
                                             <?php foreach ($gender as $g) : ?>
                                                 <option value="<?= $g; ?>"><?= $g; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                         <small class="form-text text-danger"><?= form_error('gender'); ?></small>
                                     </div>
                                 </div>
                                 <div class="col">
                                     <div class="form-group">
                                         <select class="form-control border-info text-center" id="jam" name="jam" value="<?= set_value('jam'); ?>">
                                             <option value="">-- Jam Keberangkatan --</option>
                                             <?php foreach ($jam as $j) : ?>
                                                 <option value="<?= $j; ?>"><?= $j; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                         <small class="form-text text-danger"><?= form_error('jam'); ?></small>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <input type="date" class="form-control border-info" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>" placeholder="Tanggal Berangkat">
                                 <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                             </div>

                             <input type="hidden" name="harga" id="harga" class="form-control border-info" value="<?= $penumpang['harga'] = 180000; ?>">
                             <input type="hidden" name="jurusan" id="jurusan" class="form-control border-info" value="<?= $penumpang['jurusan'] = 'Gambir'; ?>">
                             <input type="hidden" name="kelas" id="kelas" class="form-control border-info" value="<?= $penumpang['kelas'] = 'Eksekutif'; ?>">

                     </div>
                     <div class="card-footer border-info bg-transparent">
                         <button type="submit" name="tambah" class="btn btn-block btn-info">Beli</button>
                     </div>
                     </form>

                 </div>
             </div>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->