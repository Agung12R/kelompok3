<?php
error_reporting(0);
include 'db.php';
session_start();
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id =
1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GemilangFashion</title>
    <link rel="shortcut icon" href="./img/1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
</head>
<body>
    <!--header-->
    <header>
        <div class="container">
            <h1><a href="index.php">GemilangFashion</a></h1>
            <ul>
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

    <!--search-->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>

    <!-- product detail -->
    <div class="section">
        <div class="container">
            Detail Produk
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">

                        <h1>Pesen To Whatsapp</h1>
                        <input type="text" class="name" placeholder="Nama">
                        <input type="text" class="produk" placeholder="Nama Produk">
                        <input type="text" class="ukuran" placeholder="Ukuran">
                        <input type="text" class="warna" placeholder="Warna">
                        <input type="text" class="alamat" placeholder="Alamat">
                        <input type="text" class="penerima" placeholder="Penerima">
                        <button type="button" onclick="sendwhatsapp();">Via WA</button>

                </div>
                <div class="col-2">
                    <h3>
                        <?php echo $p->product_name ?>
                    </h3>
                    <h4>Rp.
                        <?php echo number_format($p->product_price) ?>
                    </h4>
                    <p>Deskripsi :<br>
                        <?php echo $p->product_description ?>
                    </p>

                </div>
            </div>
        </div>
    </div>



        <script>
            function sendwhatsapp() {
                // var phonenumber = "<?php echo $a->admin_telp ?>";
                var phonenumber = "+81808823587";

                var name = document.querySelector('.name').value;
                var produk = document.querySelector('.produk').value;
                var ukuran = document.querySelector('.ukuran').value;
                var warna = document.querySelector('.warna').value;
                var alamat = document.querySelector('.alamat').value;
                var penerima = document.querySelector('.penerima').value;

                var url = "https://wa.me/" + phonenumber + "?text="
                    + "*Name :* " + name + "%0a"
                    + "*produk :* " + produk + "%0a"
                    + "*ukuran :* " + ukuran + "%0a"
                    + "*warna :* " + warna + "%0a"
                    + "*alamat :* " + alamat + "%0a"
                    + "*penerima :* " + penerima + "%0a"
                    + "Kalo sudah memesan Tunggu Sebentar";


                window.open(url, '_blank').focus();
            }
        </script>



    <!--- footer --->
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