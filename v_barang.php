<link rel="stylesheet" href="<?=base_url()?>src/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Barang</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
            <li class="breadcrumb-item active">Penyimpanan Barang</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="flash-data" data-flashdata="<?=$this->session->flashdata('sukses');?>"></div>
  <div class="flash-data-gagal" data-flashdatagagal="<?=$this->session->flashdata('gagal');?>"></div>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <?php if ($this->session->userdata('role')=='1' || $this->session->userdata('role')=='2'): ?>
        <h3 class="card-title">
          <a href="<?=base_url('barang/tambah')?>" class="btn btn-block bg-gradient-primary">
            Tambah Barang
          </a>
        </h3>
        <?php endif ?>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <?php if ($this->session->userdata('role')=='1' || $this->session->userdata('role')=='2'): ?>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Volume</th>
                    <th>Tanggal Masuk</th>
                    <!-- <th>Harga</th>
                    <th>Total Harga</th> -->
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $no=1;
                  foreach ($barang as $row): ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['nama_kategori'];?></td>
                    <td><?=$row['nama_barang'];?></td>
                    <td><?=$row['volume_brg'];?></td>
                    <td><?=$row['date_in'];?></td>
                    <!-- <td><?=$row['harga'];?></td> -->
                    <!-- <td>><?=rupiah($d['total_harga']);?></td> -->
                    <td>
                       <center><a href="<?=base_url('barang/edit/'.$row['id_barang'])?>" class="btn btn-info btn-sm">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?=base_url('barang/hapus/'.$row['id_barang'])?>" class="btn btn-danger btn-sm tombol-hapus">
                          <i class="fas fa-trash"></i>
                        </a></center>
                    </td>
                  </tr>
                  <?php endforeach ?>

                  <?php else: ?>
                              <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
                    <th>Volume</th>
                    <!-- <th>Harga</th>
                    <th>Total Harga</th>       -->              
                  </tr>
                </thead>
                <tbody>
                    <?php 
                  $no=1;
                  foreach ($barang as $row): ?>
                  <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['nama_kategori'];?></td>
                    <td><?=$row['nama_barang'];?></td>
                    <td><?=$row['volume_brg'];?></td>
                    <td><?=$row['date_in'];?></td>
                    <!-- <td><?=$row['harga'];?> -->
                    <!-- <td>><?=rupiah($d['total_harga']);?></td> -->
                  </tr>
                  <?php endforeach ?>
                <?php endif ?>  
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            
          </div>
          <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<script src="<?=base_url()?>src/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>src/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "language": {
        "zeroRecords": "Data masih kosong",
        "sSearch": "Cari"
      }
    });
  });
</script>
