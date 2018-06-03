<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>

  <?php
  include('koneksi.php');
  $idKriteria = $_GET['id'];
  $show = mysql_query("SELECT * FROM kriteria WHERE idKriteria='$idKriteria'");
  if(mysql_num_rows($show) == 0){
    echo '<script>window.history.back()</script>';
  }else{
    $data = mysql_fetch_assoc($show); 
    
  }
  ?>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<!--       <a><img src="logo.png" alt="Image" height="62" width="55"></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">SPK-MFEP</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kriteria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kriteria.php">Kriteria</a></li>
            <li><a href="nilaiKriteria.php">Nilai Kriteria</a></li>
          </ul>
        </li>
        <li><a href="alternatif.php">Alternatif</a></li>
        <li><a href="perhitungan.php">Perhitungan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="daftar.php"><spanf class="glyphicon glyphicon-log-in"></span> Daftar</a></li>
      </ul>
    </div>
  </div>
</nav>

    <form method="post">
    <input type="hidden" name="id" value="<?php echo $idKriteria; ?>">
    <div class="container">    
      <div class="row">

        <div class="col-sm-20">

          <div class="row">
            <div class="col-sm-20">
                  <div class="container">
                  <center><h1>Ubah Kriteria</h1><br><br>
                      <label>Kode</label>
                      <input name="kode" class="form-control" id="ex1" type="text" style="width:400px" value="<?php echo $data['kode']; ?>" required><br>
                      <label>Nama Kriteria</label>
                      <input name="namaKriteria" class="form-control" id="ex1" type="text" style="width:400px" value="<?php echo $data['namaKriteria']; ?>" required><br>
                      <label>Atribut</label>
                      <input name="atribut" class="form-control" id="ex1" type="text" style="width:400px" value="<?php echo $data['atribut']; ?>" required><br>
                      <button onclick=location=URL name="tambah" class="btn btn-lg btn-primary btn-block" type="submit" value="Login" style="width:200px">Simpan</button><br><br></center>
</div></div></div></div></div></div></div>
                      </input>
</form>

<footer class="footer navbar-fixed-bottom" style="background-color: #e3f2fd;">
  <center><p>SPPK Kelas A Kelompok XX</p></center>
</footer>

</body>
</html>

<?php
if(isset($_POST['tambah'])){
  include('koneksi.php');
  $kode   = $_POST['kode']; 
  $namaKriteria    = $_POST['namaKriteria'];  
  $atribut    = $_POST['atribut'];
  $update = mysql_query("UPDATE kriteria SET kode='$kode', namaKriteria='$namaKriteria', atribut='$atribut' WHERE idKriteria='$idKriteria'") or die(mysql_error());
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=kriteria.php\">";
}
?>