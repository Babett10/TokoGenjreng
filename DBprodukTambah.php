<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Produk</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<?php
    //panggil DB
    include("connection.php");
    $query = mysqli_query($connect,"SELECT * FROM `jenis` ORDER BY id_jenis ASC");
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Pelanggan</h3>
                <form action="backend/addProduk.php" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Nama Produk
                                </td>
                                <td>
                                    <input type="text" name="nama_produk" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Stok
                                </td>
                                <td>
                                    <input type="number" name="stok" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Harga
                                </td>
                                <td>
                                    <input type="number" name="harga" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="jenis">      
                                        <?php
                                                while ($product = mysqli_fetch_array($query)) {?>
                                                    <option value="<?php echo $product['id_jenis']; ?>"> <?php echo $product['nama_jenis']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   Merk
                                </td>
                                <td>
                                    <input type="text" name="merk" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                   Nama file gambar
                                </td>
                                <td>
                                    <input type="text" name="gambar" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Deskripsi
                                </td>
                                <td>
                                    <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit" class ="btn btn-primary">
                                </td>
                            </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>