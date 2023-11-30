<?php

include 'db.php';

if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '".$_GET['idk']."' ");
    echo '<script>window.location="data-kategori.php"</script>';
}

if(isset($_GET['idr'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_client WHERE client_id = '".$_GET['idr']."' ");
    echo '<script>window.location="client.php"</script>';
}

if(isset($_GET['idp'])){
    $produk = mysqli_query($conn, "SELECT product_image FROM tb_product WHERE product_id =  '".$_GET['idp']. "' ");
    $p = mysqli_fetch_object($produk); 
    
    unlink('./produk/' .$p->product_image);

    $delete = mysqli_query($conn, "DELETE FROM tb_product WHERE product_id = '".$_GET['idp']. "' "); 
    echo '<script>window.location="data-produk.php"</script>';
}
?>