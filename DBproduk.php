<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <title>DB Produk</title>
</head>

<body>
    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link active" href="index.php"><h4>Home</h4></a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="DBproduk.php"><h4>Produk</h4></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-md col-md-12">
    <h1>Data Produk </h1>
        <a class="btn btn-primary mb-3" href="DBprodukTambah.php" role="button">Tambah Data Produk</a>
        <?php
            //panggil DB
            include("connection.php");
            $query = mysqli_query($connect,"SELECT * FROM `produk` 
            INNER JOIN jenis ON produk.id_jenis = jenis.id_jenis");
         ?>
                    
            <table id="myTable" class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //cetak jumlah tabel
                while ($data = mysqli_fetch_array($query)) {
                ?>
             
                <tr>
                    <td><?php echo $data["nama_produk"] ?></td>
                    <td><?php echo $data["stok"] ?></td>
                    <td><?php echo $data["harga"] ?></td>
                    <td><?php echo $data["nama_jenis"] ?></td>
                    <td><?php echo $data["merk"] ?></td>
                    <td><?php echo $data["gambar"] ?></td>
                    <td><?php echo $data["deskripsi"] ?></td>
                    <td>
                        <a href="DBprodukEdit.php?id=<?php echo $data['id_produk']?>" class="btn btn-warning">Edit</a>
                        <a href="backend/deleteProduk.php?id=<?php echo $data['id_produk']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php   
                }
            ?>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>