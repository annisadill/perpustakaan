<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container" style="text-align: center;">
      <h1>Tambah Buku</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container" >
      <h2>Add Buku</h2>
      <div class="row">
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/home/insertdata" method="post" enctype="multipart/form-data">
          <label>Judul Buku</label>
          <input type="text" name="name" value="" class="form-control">
          <label>Pengarang</label>
          <input type="text" name="alamat" value="" class="form-control">
          <label>Foto</label>
          <input type="file" name="fotopost" class="form-control">
          <label>Penerbit</label>
          <input type="text" name="penerbit" value="" class="form-control">

          <input type="submit" name="submit" value="Submit" class="btn btn-info">
        </form>
      </div>
      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
