<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <link rel="stylesheet" href="<?=base_url()?>src/css/laporan.css">

    <title>Data Barang</title>
  </head>
  <body>
    <meta http-equiv="REFRESH" content="5; url=<?=base_url('laporan/aset')?>"> 
    <div class="container">
      <div class="row pt-4">
        <div class="col-md-2">
              
        </div>
        <div class="col-md-10 text-center">
          <h4><center>INFORMATION TECHNOLOGY LEARNING GROUP</center></h4>
          <h4><center>UNIVERSITAS SUMATERA UTARA</center></h4>
          <h4><center>FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI</center></h4>
          <P><center>Jl. Alumni no.3 Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155</center></P>
          <p><center>Telp/Fax : 061-1234567 E-mail : itlgfasilkomusu@gmail.com</center></p>
        </div>
      </div>
      <hr style="border: 1px solid black;">
      <div class="row">
        <div class="col text-center">
          <p></p>
          <h4><center>Laporan Barang Keluar Pada Ruangan <?=$lokasi['nama_lokasi']?></center></h4>
          <p></p>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col text-center">
          <center><table border="1" width="90%">
            <thead>
              <th>No.</th>
              <th>Nama Barang</th>
              <th>Volume</th>
              <th>Satuan  </th>
              <th>Harga (Rp.)  </th>
              <th>Jumlah (Rp.)</th>
            </thead>
            <tbody>
              <?php 
              $sum=0; 
              $no=1; 
                foreach ($aset as $row): 
              $sum+=$row['total_harga'];      
              ?>    
              <tr>
                <td><center><?=$no++;?></center></td>
                <td><center><?=$row['nama_barang']?></center></td>
                <td><center><?=$row['volume']?></center></td>
                <td><center><?=$row['satuan']?></center></td>
                <td><center><?=laporan($row['harga'])?></center></td>
                <td><center><?=laporan($row['total_harga'])?></center></td>
              </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5"><b>Jumlah</b></td>
                <td><center><?=laporan($sum);?></center></td>
              </tr>
            </tfoot>
          </table></center>
        </div>
      </div>
      <br><br>
      <div class="row pt-3">
        <div class="col text-center">
          <center><table border="0" width="80%">
            
            <tbody>    
              <tr>
              <td><center>Mengetahui,</center></td>
              <td><center>Medan, <?=tgl_indo(date('Y-m-d'))?></center></td>
            </tr>
            <tr>
                <td><center>Kepala Bidang Inventaris</center></td>
                <td><center>Admin ITLG</center></td>

              </tr>
              <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td><center>Nabila Rizka</center></td>
                <td><center>Alya Ananda</center></td>

              </tr>
              <tr>
                <td><center>NIM. 181402022</center></td>
                <td><center>NIM. 181402016</center></td>

              </tr>
              
            </tbody>
    <script>
      window.print();
    </script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
