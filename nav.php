
    <ul class="nav navbar-nav navbar-right" >
      <li>
        <?php 
          $conn = mysqli_connect('localhost', 'root', 'tkjtkj', 'db_fashion_gemilang');
          if(isset($_SESSION['idUser'])){
            $iduser = $_SESSION['idUser'];
            $queryUser = mysqli_query($conn, "SELECT * FROM tabel_user WHERE idUser='$_SESSION[idUser]'");
            $arrayUser = mysqli_fetch_array($queryUser);
            echo '
                <a href="proses/logout.php"><button class="btn navbar-btn" id="btn-logout" style="color:#7986cb;margin-top:-0.8vh;
                background-color: white;"><b>Logout</b></button></a>
            ';
          }else{
            echo '
                <button class="btn navbar-btn" id="btn-login"><b>MASUK</b></button>
            ';
          }
       ?>
      </li>

  <!-- userLog -->
  <div class="container" id="log">
    <ul class="nav nav-tabs nav-justified">
      <li><a href="#freg" data-toggle="tab" style="font-style:bold;font-size: 1.2em; color:#1c6def">Daftar</a></li>
      <li class="active"><a href="#flogin" data-toggle="tab" style="font-style:bold;font-size: 1.2em; color:#1c6def">Login</a></li>
    </ul>
    <div class="tab-content">
        <form action="proses/login.php" method="post" role="form" id="flogin" style="padding-top: 10px" class="tab-pane fade in active">
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password :</label>
          <input type="password" class="form-control" id="pwd" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
      </form>

      <form action="proses/daftar.php" method="post" role="form" id="freg" style="padding-top: 10px" class="tab-pane fade">
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="noTelp">Nomor Telepon :</label>
          <input type="telp" class="form-control" id="noTelp" name="telpon" required>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password :</label>
          <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <div class="form-group">
          <label for="pwd2">Konfirmasi Password :</label>
          <input type="password" class="form-control" id="pwd2" name="repassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>
    </div>
  </div>
</nav>
