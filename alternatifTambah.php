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
<!--         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="daftar.php"><spanf class="glyphicon glyphicon-log-in"></span> Daftar</a></li> -->
      </ul>
    </div>
  </div>
</nav>

    <form method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="container">    
      <div class="row">
<center><h1>Tambah Alternatif</h1><br>
        <div class="col-sm-1">


 
          <div class="row">

            <div class="col-sm-20">

                  <div class="container">
                  
 <label>Kode</label>
                      <input name="kode" class="form-control" id="ex1" type="text" style="width:400px" required><br>
                       <label>Nama Alternatif</label>
                      <input name="namaAlternatif" class="form-control" id="ex1" type="text" style="width:400px" required><br>
                       <label>Keterangan</label>
                      <input name="keterangan" class="form-control" id="ex1" type="text" style="width:400px" required><br>                      

                      <label>Suhu</label>
                      <select class="form-control" style="width:400px" name="suhu" id="suhu" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Suhu\"");
    $jsArray = "var dtSh = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>
                     
 <label>Kedalaman</label>
                      <select class="form-control" style="width:400px" name="kedalaman" id="kedalaman" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Kedalaman\"");
    $jsArray = "var dtKd = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>
     <label>Ukuran Kolam</label>
                      <select class="form-control" style="width:400px" name="ukuranKolam" id="ukuranKolam" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Ukuran Kolam\"");
    $jsArray = "var dtUk = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>
         <label>Kualitas Air</label>
                      <select class="form-control" style="width:400px" name="kualitasAir" id="kualitasAir" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Kualitas Air\"");
    $jsArray = "var dtKua = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>
         <label>Jenis Kolam</label>
                      <select class="form-control" style="width:400px" name="jenisKolam" id="jenisKolam" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Jenis Kolam\"");
    $jsArray = "var dtJe = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>
         <label>Sirkulasi Air</label>
                      <select class="form-control" style="width:400px" name="sirkulasiAir" id="sirkulasiAir" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("SELECT isiKriteria FROM nilaikriteria WHERE namaKriteria = \"Sirkulasi Air\"");
    $jsArray = "var dtSir = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['isiKriteria'] . '">' . $row['isiKriteria'] . '</option>'; 
      }
    ?></select><br>


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
  $namaAlternatif    = $_POST['namaAlternatif'];  
  $keterangan    = $_POST['keterangan'];
  $suhu   = $_POST['suhu']; 
  $kedalaman    = $_POST['kedalaman'];  
  $ukuranKolam    = $_POST['ukuranKolam'];
  $kualitasAir   = $_POST['kualitasAir']; 
  $jenisKolam    = $_POST['jenisKolam'];  
  $sirkulasiAir    = $_POST['sirkulasiAir'];
  $cek = mysql_query("SELECT * FROM alternatif");
      $input = mysql_query("INSERT INTO alternatif VALUES(NULL, '$kode', '$namaAlternatif', '$keterangan', '$suhu', '$kedalaman', '$ukuranKolam', '$kualitasAir', '$jenisKolam', '$sirkulasiAir')") or die(mysql_error());
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=alternatif.php\">";
  }
?>