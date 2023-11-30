<?php
error_reporting(0);
include 'db.php';
session_start();
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id =
1");
$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <h1>Sead Data To WhatsApp</h1>
        <label for="">Nama</label>
        <input type="text" class="name" >
        <label for="">Nama Produk</label>
        <input type="text" class="produk">
        <label for="">Ukuran</label>
        <input type="text" class="ukuran">
        <label for="">Warna</label>
        <input type="text" class="warna">
        <label for="">Alamat</label>
        <input type="text" class="alamat">
        <label for="">Penerima</label>
        <input type="text" class="penerima">
        <button type="button" onclick="sendwhatsapp();">Via WA</button>
    </form>

    <script>
        function sendwhatsapp(){
            // var phonenumber = "<?php echo $a->admin_telp ?>";
            var phonenumber = "+81808823587";

            var name = document.querySelector('.name').value;
            var produk = document.querySelector('.produk').value;
            var ukuran = document.querySelector('.ukuran').value;
            var warna = document.querySelector('.warna').value;
            var alamat = document.querySelector('.alamat').value;
            var penerima = document.querySelector('.penerima').value;

            var url = "https://wa.me/" +phonenumber + "?text="
            +"*Name :* " +name+"%0a"
            +"*produk :* " +produk+"%0a"
            +"*ukuran :* " +ukuran+"%0a"
            +"*warna :* " +warna+"%0a"
            +"*alamat :* " +alamat+"%0a"
            +"*penerima :* " +penerima+"%0a"
            +"Kalo sudah memesan Tunggu Sebentar";


            window.open(url, '_blank').focus();
        }
    </script>
</body>
</html>