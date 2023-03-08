<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div> -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
<div class="card" style="width: 20rem;">
   <div class="card-header">
     Cetak Data
   </div>
   <ul class="list-group list-group-flush">
     <li class="list-group-item">Cetak Petugas <br><br><a href="<?=site_url('user/cetakPetugas') ?>"  target="_blank" class="btn btn-primary">Cetak</a></li>
     <li class="list-group-item">Cetak Siswa <br><br><a href="<?=site_url('user/cetakSiswa') ?>" target="_blank" class="btn btn-primary">Cetak</a></li>
     <li class="list-group-item">Cetak Transaksi <br><br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Cetak Transaksi</button></li>   </ul>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('user/cetakTransaksi') ?>" target="_blank" method="post">
      <div class="modal-body">
      <div class="form-group">
          <label for="tgl1">Dari</label>
            <input type="date" name="tgl1" id="tgl1" class="form-control" value="<?= date('Y-m-d') ?>">
            <br>  
          <label for="tgl2">Hingga</label>
            <input type="date" name="tgl2" id="tgl2" class="form-control"  value="<?= date('Y-m-d') ?>">
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Filter</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </section>
    <!-- /.content -->