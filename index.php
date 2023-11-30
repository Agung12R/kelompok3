<?php
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GemilangFashion</title>
    <link rel="shortcut icon" href="./img/1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
    
            <h1><img src="./img/Gemilang Fashion.png" width="40px" style="margin-bottom: 5px;"><a href="index.php">GemilangFashion</a></h1>
            <ul>
                <li><a href="produk.php">Produk</a></li>

            </ul>
        </div>

    </header>


    <!--search-->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>
    <div class="gif">
        <img src="./img/fashion.gif" width="100px" style="margin-bottom: 5px;">
    </div>

    <!-- category -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php
                $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                if (mysqli_num_rows($kategori) > 0) {
                    while ($k = mysqli_fetch_array($kategori)) {
                        ?>
                        <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                            <div class="col-5">
                                <img src="./img/2.png" width="50px" style="margin-bottom: 5px;">
                                <p>
                                    <?php echo $k['category_name'] ?>
                                </p>
                            </div>
                        <?php }
                } else { ?>
                        <p>Kategori tidak ada</p>
                    <?php } ?>
            </div>
        </div>
    </div>

    <!-- new product-->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 
                        8");
                if (mysqli_num_rows($produk) > 0) {
                    while ($p = mysqli_fetch_array($produk)) {
                        ?>
                        <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                            <div class="col-4">
                                <img src="produk/<?php echo $p['product_image'] ?>">
                                <p class="nama">
                                    <?php echo substr($p['product_name'], 0, 30) ?>
                                </p>
                                <p class="harga">Rp.
                                    <?php echo number_format($p['product_price']) ?>
                                </p>
                            </div>
                        </a>
                    <?php }
                } else { ?>
                    <p>Produk tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-------footer------------->
    <div class="footer">
        <div class="container">
            <h4>Alamat :
                <?php echo $a->admin_address ?>
            </h4>
            <h4>Email :
                <?php echo $a->admin_email ?>
            </h4>
            <h4>No. Hp :
                <?php echo $a->admin_telp ?>
            </h4>
            <center>
                <h1><a href="https://www.instagram.com/rumahgemilang/?hl=id"><i class="ri-instagram-line"></i><a
                            href="https://www.youtube.com/@rumahgemilang/featured"><i
                                class="ri-youtube-line"></i></a></a><a href="https://rumahgemilang.com/"><i
                            class="ri-dribbble-fill"></i></a></h1>
            </center>

            <small>Copyright &copy; 2023 - GemilangFashion</small>
        </div>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/script.js"></script>
</body>

</html>