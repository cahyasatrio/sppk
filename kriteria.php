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

<center><font face="Comic sans MS" size="10">Kriteria</font></center><br><br>

    <div class="container">    
      <div class="row">

        <div class="col-sm-20">

          <div class="row">
            <div class="col-sm-20">

<!-- <a href="kriteriaTambah.php" class="btn btn-info" style="width:95px"><span class="glyphicon glyphicon-plus"></span>  Tambah</a><br><br>
 --><table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kriteria</th>
                            <th>Atribut</th>
                           <!--  <th></th>
                            <th></th> -->
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          include('koneksi.php');
                          $query = mysql_query("SELECT * FROM kriteria") or die(mysql_error());
                          if(mysql_num_rows($query) == 0){
                            echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
                          }else{ 
                            while($data = mysql_fetch_assoc($query)){ 
                              echo '<tr >';
                              echo '<td>'.$data['idKriteria'].'</td>';
                              echo '<td>'.$data['kode'].'</td>';  
                              echo '<td>'.$data['namaKriteria'].'</td>';  
                              echo '<td>'.$data['atribut'].'</td>'; 
                            //   echo '<td><center><a href="kriteriaEdit.php?id='.$data['idKriteria'].'" class="btn btn-success a-btn-slide-text">
                            //   <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            //   <span><strong>Edit</strong></span></a></center></td>'; 
                            //   echo '<td><center><a href="kriteriaHapus.php?id='.$data['idKriteria'].'" class="btn btn-danger a-btn-slide-text" onclick="return confirm(\'Anda yakin akan menghapus data?\')">
                            //   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            //   <span><strong>Delete</strong></span>            
                            // </a></center></td>';
                            echo '</tr class="active">'; 
                          }
                        }
                        ?>  
                      </tbody> 
                    </table>
                    </div></div></div></div></div>

<footer class="footer navbar-fixed-bottom" style="background-color: #e3f2fd;">
  <center><p>SPPK Kelas A Kelompok XX</p></center>
</footer>

</body>
</html>
