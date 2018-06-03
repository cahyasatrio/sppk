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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="daftar.php"><spanf class="glyphicon glyphicon-log-in"></span> Daftar</a></li>
      </ul>
    </div>
  </div>
</nav>

    <form method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="container">    
      <div class="row">

        <div class="col-sm-20">

          <div class="row">
            <div class="col-sm-20">
                  <div class="container">
                  <center><h1>Tambah Nilai Kriteria</h1><br><br>
                      <label>Nama Kriteria</label>
                      <select class="form-control" style="width:400px" name="namaKriteria" id="namaKriteria" onchange="changeValue(this.value)" >
        <option value=0 disabled="disabled">-Pilih-</option>
        <?php
        include ("koneksi.php");
    $result = mysql_query("select * from kriteria");
    $jsArray = "var dtKrt = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['namaKriteria'] . '">' . $row['namaKriteria'] . '</option>'; 
      }
    ?></select><br>
                      <label>Isi Kriteria</label>
                      <input name="isiKriteria" class="form-control" id="ex1" type="text" style="width:400px" required><br>
                      <label>Nilai</label>
                      <input name="nilai" class="form-control" id="ex1" type="text" style="width:400px" required><br>
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
  $namaKriteria   = $_POST['namaKriteria']; 
  $isiKriteria    = $_POST['isiKriteria'];  
  $nilai    = $_POST['nilai'];
  $cek = mysql_query("SELECT * FROM nilaikriteria");
      $input = mysql_query("INSERT INTO nilaikriteria VALUES(NULL, '$namaKriteria', '$isiKriteria', '$nilai')") or die(mysql_error());
      echo "<meta http-equiv=\"refresh\" content=\"0;URL=nilaiKriteria.php\">";
  }
?>