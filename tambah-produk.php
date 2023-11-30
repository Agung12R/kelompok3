<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="shortcut icon" href="./img/1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Rgi Shop</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Tambah Data Produk</h3>
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data">
                    <select class="input-control" name="kategori" required>
                        <option value="">--pilih--</option>
                        <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        while ($r = mysqli_fetch_array($kategori)) {
                            ?>
                            <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                        <?php } ?>
                    </select>

                    <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                    <input type="text" name="harga" class="input-control" placeholder="Harga">
                    <input type="file" name="gambar" class="input-control" required>
                    <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br><br>
                    <select class="input-control" name="status">
                        <option value="">--pilih--</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                if (isset($_POST['submit'])) {

// menampung inputan dari form
                    $kategori   =$_POST['kategori'];
                    $nama       =$_POST['nama'];
                    $harga      =$_POST['harga'];
                    $deskripsi  =$_POST['deskripsi'];
                    $status     =$_POST['status'];
// menampung data file yang diupload
                    $filename =$_FILES['gambar']['name'];
                    $tmp_name =$_FILES['gambar']['tmp_name'];
                    $type1 = explode('.',$filename);
                    $type2 = $type1[1];

                    $newname = 'produk' .time(). '.'.$type2;

// menampung data format file yang diizinkan
                    $tipe_diizinkan = array('jpg','jpeg','png','gif','JPG') ;
// validasi format file
                    if(!in_array($type2, $tipe_diizinkan)){
// jika format file tidak ada di dalam tipe diizinkan
                    echo '<script>alert("Format file tidak diizinkan")</script>';
                    }else{
                        move_uploaded_file($tmp_name, './produk/' .$newname);
// sudo chmod -R 777 /var/www/html/
// sudo chmod -R ugo+rwx /var/www/html/
                        $insert = mysqli_query($conn, "INSERT INTO tb_product VALUES(
                            null,
                            '".$kategori."',
                            '".$nama."',
                            '".$harga."',
                            '".$deskripsi."',
                            '".$newname."',
                            '".$status."',
                            null
                            ) ");
                    if($insert){
                        echo '<script>alert("Tambah data berhasil")</script>';
                        echo '<script>window.location=data"data-produk.php"</script>';
                    }else{
                        echo 'gagal' .mysqli_error( $conn ) ;
                    }

                }
            }
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Rgi Shop.</small>
        </div>
    </footer>
    <script>
    CKEDITOR.replace( 'deskripsi' );
</script>
</body>
</html>