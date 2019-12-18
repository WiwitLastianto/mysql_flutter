<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WELCOME TO MY WEBSITE </title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Pegawai
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">

                <tr>
                <div class="form-group row mt-2">
                    <div class="col-sm-10">
                      <input type="text" name="keyword" class="form-control" id="nama">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success" name="cari">Cari</button>
                  </div>

                    </tr>

                    <tr>
                        <th>ID PEGAWAI</th>
                        <th>NAMA PEGAWAI</th>
                        <th>POSISI</th>
                        <th>GAJI</th>
                    </tr>
                    <?php 
                    include "koneksi.php";
                     if(isset($_POST["cari"])){
                        $search = $_POST['keyword'];

                        $query = $db->query("SELECT * FROM tb_pegawai WHERE id LIKE '%$search%' ORDER BY id ASC");
                    }
                        $no = 1;
                        $tampil = mysqli_query($connect, "SELECT * FROM tb_pegawai");
                        while($data=mysqli_fetch_array($tampil))
                        {
                            
                    ?>
                                    
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['posisi']; ?> </td>
                        <td> <?php echo $data['gaji']; ?> </td>
                        <td>
                            <a href="editPegawai.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="deletePegawai.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>