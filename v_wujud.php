<link rel="stylesheet" href="<?=base_url()?>src/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Barang Keluar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
            <li class="breadcrumb-item active">Barang Keluar</li>
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
          <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block bg-gradient-primary">Tambah Barang</button>
          <!--<a href="<?=base_url('aset_wujud/tambah')?>" class="btn btn-block bg-gradient-primary">
            Tambah Barang
          </a> -->
        </h3>
        <?php endif ?>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
            </div>
        </div>
          <div class="card-body">
            <br/>
            <div class="table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Barang</th>
                  <th>Nama</th>
                  <th>Volume</th>
                  <th>Tanggal Keluar</th>
                  <th>Nilai Barang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                 <?php if ($this->session->userdata('role')=='1' || $this->session->userdata('role')=='2'): ?>
                  <?php $no=1; foreach ($aset as $row): ?>              
                <tr>
                  <td><?=$no++;?></td>
                  <td><?=$row['kode_aset'];?></td>
                  <td><?=$row['nama_barang'];?></td>
                  <td align="center"><?=$row['volume'];?></td>
                  <td><?=$row['date'];?></td>
                  <td><?=rupiah($row['harga']);?></td>
                  <td>
                    <center><a href="<?=base_url('aset_wujud/detail/'.$row['id_aset'])?>" class="btn btn-success btn-sm">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="<?=base_url('aset_wujud/edit/'.$row['id_aset'])?>" class="btn btn-info btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="<?=base_url('aset_wujud/hapus/'.$row['id_aset'])?>" class="btn btn-danger btn-sm tombol-hapus">
                      <i class="fas fa-trash"></i>
                    </a></center>
                  </td>
                </tr>
                <?php endforeach ?>

                <?php else: ?>
                  <?php $no=1; foreach ($aset as $row): ?>   
                 <tr>
                  <td><?=$no++;?></td>
                  <td><?=$row['kode_aset'];?></td>
                  <td><?=$row['nama_barang'];?></td>
                  <td align="center"><?=$row['volume'];?></td>
                  <td><?=$row['date'];?></td>
                  <td><?=rupiah($row['harga']);?></td>
                  <td>
                    <a href="<?=base_url('aset_wujud/detail/'.$row['id_aset'])?>" class="btn btn-success btn-sm">
                      <i class="fas fa-eye"></i>
                    </a>
                  </td>
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

  <?php 
    $no++;
    foreach ($kategori as $row): 
      $kategori_id = $row['id_kategori'];

    ?>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pilih Kategori</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="<?=base_url('aset_wujud/tambah')?>" autocomplete="off" method="post">
            <div class="form-group">
              <select name="id_kategori" class="js-example-basic-single form-control" required>
                <option value="">- Pilih --</option>
                   <?php foreach ($kategori as $row): ?>
                      <option value="<?=$row['id_kategori'];?>"><?=$row['nama_kategori'];?></option>
                    <?php endforeach ?>
                  </select>
                </div>  
            <!-- /.card-body -->                
          </div>
          <div class="modal-footer content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>

<?php endforeach ?>

  <!-- /.content -->
</div>
<script src="<?=base_url()?>src/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>src/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "language": {
        "sSearch": "Cari"
      }
    });
  });
</script>

