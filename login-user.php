<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./img/1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<style>
     img{
    height:"75px";
    height: "auto";
    box-shadow: 0 0 5px #ffe6c5,
    0 0 25px #ffe6c5,
    0 0 50px #ffe6c5,
    0 0 100px #ffe6c5;

}
     .put input{
    height:"75px";
    height: "auto";
    box-shadow: 0 0 5px #ffe6c5,
    0 0 25px #ffe6c5,
    0 0 50px #ffe6c5,
    0 0 100px #ffe6c5;
}
.put input:hover{
    transform: translateX(10px);
}
</style>
<div>
    
    <img src="./img/gifa.gif" height="75px" style="margin-bottom: 5px;">
    
    <body id="bg-login">
    <div class="login-box">
        <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
        <!-- <h2>Login Admin</h2> -->
        <form action="" method="POST">
        <div class="user-box">
            <input type="text" name="user" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Password</label>
          </div>
          <div class="put">
              <input type="submit" name="submit" value="Login" class="btn">
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            session_start();
            include'db.php';

            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
            if(mysqli_num_rows($cek)  > 0){
                $d =mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;
                echo '<script>window.location="detail-produk.php"</script>';
            }else{
                echo '<script>alert("Username atau password Anda salah")</script>';
            }
        }
        ?>

    </div>
</div>
    <script src="./js/script.js"></script>
    <script src="./js/bae.js"></script>
</body>
</html>