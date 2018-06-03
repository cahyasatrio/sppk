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

<center><font face="Comic sans MS" size="10">Perhitungan</font></center><br><br>

    <div class="container">    
      <div class="row">

        <div class="col-sm-20">

          <div class="row">
            <div class="col-sm-20">
<table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kriteria</th>
                            <th>Atribut</th>
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
                            echo '</tr class="active">'; 
                          }
                        }
                        ?>  
                      </tbody> 
                    </table>

                    <table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Alternatif</th>
                            <th>Keterangan</th>
                            <th>Suhu</th>
                            <th>Kedalaman</th>
                            <th>Ukuran Kolam</th>
                            <th>Kualitas Air</th>
                            <th>Jenis Kolam</th>
                            <th>Sirkulasi Air</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          include('koneksi.php');
                          $query = mysql_query("SELECT * FROM alternatif") or die(mysql_error());
                          if(mysql_num_rows($query) == 0){
                            echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
                          }else{ 
                            while($data = mysql_fetch_assoc($query)){ 
                              echo '<tr >';
                              echo '<td>'.$data['no'].'</td>';
                              echo '<td>'.$data['kode'].'</td>';  
                              echo '<td>'.$data['namaAlternatif'].'</td>';  
                              echo '<td>'.$data['keterangan'].'</td>'; 
                              echo '<td>'.$data['suhu'].'</td>';
                              echo '<td>'.$data['kedalaman'].'</td>';  
                              echo '<td>'.$data['ukuranKolam'].'</td>';  
                              echo '<td>'.$data['kualitasAir'].'</td>'; 
                              echo '<td>'.$data['jenisKolam'].'</td>';  
                              echo '<td>'.$data['sirkulasiAir'].'</td>'; 

                            //   echo '<td><center><a href="alternatifEdit.php?id='.$data['idKriteria'].'" class="btn btn-success a-btn-slide-text">
                            //   <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            //   <span><strong>Edit</strong></span></a></center></td>'; 
                            //   echo '<td><center><a href="alternatifHapus.php?id='.$data['idKriteria'].'" class="btn btn-danger a-btn-slide-text" onclick="return confirm(\'Anda yakin akan menghapus data?\')">
                            //   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            //   <span><strong>Delete</strong></span>            
                            // </a></center></td>';
                            echo '</tr class="active">';
                                                   
                          }
                        }


                        ?>  
                      </tbody> 
                    </table>

                                 <table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                            <th>Nama Alternatif</th>
                            <th>Suhu</th>
                            <th>Kedalaman</th>
                            <th>Ukuran Kolam</th>
                            <th>Kualitas Air</th>
                            <th>Jenis Kolam</th>
                            <th>Sirkulasi Air</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          include('koneksi.php');
                          $query = mysql_query("SELECT * FROM alternatif") or die(mysql_error());
                          if(mysql_num_rows($query) == 0){
                            echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
                          }else{ 
                            while($data = mysql_fetch_assoc($query)){ 
                              echo '<tr >';  
                              echo '<td>'.$data['namaAlternatif'].'</td>'; 
  if ($data['suhu'] == "24 - 29")
    echo '<td>'."0.7".'</td>';
  else if ($data['suhu'] == "20 - 23")
    echo '<td>'."1".'</td>'; 
  if ($data['kedalaman'] == "40 - 70 cm")
    echo '<td>'."0.5".'</td>';
  else if ($data['kedalaman'] == "80 - 120 cm")
    echo '<td>'."1".'</td>';  
      else if ($data['kedalaman'] == "130 - 200 cm")
    echo '<td>'."0.3".'</td>'; 

  if ($data['ukuranKolam'] == "4 x 6 - 6 x 6 m")
    echo '<td>'."0.5".'</td>';
  else if ($data['ukuranKolam'] == "< 4 x 6 m")
    echo '<td>'."0.3".'</td>';  
      else if ($data['ukuranKolam'] == "> 6 x 6 m")
    echo '<td>'."1".'</td>'; 

  if ($data['kualitasAir'] == "Biru")
    echo '<td>'."1".'</td>';
  else if ($data['kualitasAir'] == "Hijau")
    echo '<td>'."0.8".'</td>';  
      else if ($data['kualitasAir'] == "Coklat")
    echo '<td>'."0.3".'</td>';    

  if ($data['jenisKolam'] == "Tanah")
    echo '<td>'."1".'</td>';
  else if ($data['jenisKolam'] == "Terpal")
    echo '<td>'."0.6".'</td>';  
      else if ($data['jenisKolam'] == "Semen")
    echo '<td>'."0.9".'</td>';                              
                              
  if ($data['sirkulasiAir'] == "Teknis")
    echo '<td>'."1".'</td>';
  else if ($data['sirkulasiAir'] == "Mesin")
    echo '<td>'."0.6".'</td>';

                            //   echo '<td><center><a href="alternatifEdit.php?id='.$data['idKriteria'].'" class="btn btn-success a-btn-slide-text">
                            //   <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            //   <span><strong>Edit</strong></span></a></center></td>'; 
                            //   echo '<td><center><a href="alternatifHapus.php?id='.$data['idKriteria'].'" class="btn btn-danger a-btn-slide-text" onclick="return confirm(\'Anda yakin akan menghapus data?\')">
                            //   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            //   <span><strong>Delete</strong></span>            
                            // </a></center></td>';
                            echo '</tr class="active">';
                                                   
                          }
                        }


                        ?>  
                      </tbody> 
                    </table>

  <table class="table table-bordered">
                        <thead>
                          <tr class="warning">
                          <th></th>
                            <th>K1</th>
                            <th>K2</th>
                             <th>K3</th>
                            <th>K4</th>
                             <th>K5</th>
                            <th>K6</th>
                            <th>JUMLAH</th>
                            <th>Lele</th>
                            <th>Mas</th>
                            <th>Gurami</th>
                            <th>Nila</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include('koneksi.php');
                          $query = mysql_query("SELECT * FROM alternatif") or die(mysql_error());
                          if(mysql_num_rows($query) == 0){
                            echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
                          }else{
                           
                            while($data = mysql_fetch_assoc($query)){ 
                             
                             $ab=0;
                             $r1=0;
                             $r2=0;
                             $r3=0;
                             $r4=0;
                             $r5=0;
                             $r6=0;
                             $r7=0;
                             $r8=0;
                             $r9=0;
                             $r10=0;
                             $r11=0;
                             $r12=0;
                             $r13=0;
                             $r14=0;
                             $r15=0;
                             $r16=0; 
                              echo '<tr >';  
                              echo '<td>'.$data['namaAlternatif'].'</td>'; 
  if ($data['suhu'] == "24 - 29")
    echo '<td>'.$r1=(0.7*0.2).'</td>';
  else if ($data['suhu'] == "20 - 23")
    echo '<td>'.$r2=(1*0.2).'</td>'; 
  if ($data['kedalaman'] == "40 - 70 cm")
    echo '<td>'.$r3=(0.5*0.07).'</td>';
  else if ($data['kedalaman'] == "80 - 120 cm")
    echo '<td>'.$r4=(1*0.07).'</td>';  
      else if ($data['kedalaman'] == "130 - 200 cm")
    echo '<td>'.$r5=(0.3*0.07).'</td>'; 

  if ($data['ukuranKolam'] == "4 x 6 - 6 x 6 m")
    echo '<td>'.$r6=(0.5*0.03).'</td>';
  else if ($data['ukuranKolam'] == "< 4 x 6 m")
    echo '<td>'.$r7=(0.3*0.03).'</td>';  
      else if ($data['ukuranKolam'] == "> 6 x 6 m")
    echo '<td>'.$r8=(1*0.03).'</td>'; 

  if ($data['kualitasAir'] == "Biru")
    echo '<td>'.$r9=(1*0.2).'</td>';
  else if ($data['kualitasAir'] == "Hijau")
    echo '<td>'.$r10=(0.8*0.2).'</td>';  
      else if ($data['kualitasAir'] == "Coklat")
    echo '<td>'.$r11=(0.3*0.2).'</td>';    

  if ($data['jenisKolam'] == "Tanah")
    echo '<td>'.$r12=(1*0.4).'</td>';
  else if ($data['jenisKolam'] == "Terpal")
    echo '<td>'.$r13=(0.6*0.4).'</td>';  
      else if ($data['jenisKolam'] == "Semen")
    echo '<td>'.$r14=(0.9*0.4).'</td>';                              
                              
  if ($data['sirkulasiAir'] == "Teknis")
    echo '<td>'.$r15=(1*0.1).'</td>';
  else if ($data['sirkulasiAir'] == "Mesin")
    echo '<td>'.$r16=(0.6*0.1).'</td>';
 
      
                                $ab =  $r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8 + $r9 + $r10 + $r11 + $r12 + $r13 + $r14 + $r15 + $r16; 
  echo '<td>'.$ab.'</td>'; 
    echo '<td>'.($ab/(0.945))*(100).'</td>'; 
    
    echo '<td>'.($ab/(0.804))*(100).'</td>'; 
   
    echo '<td>'.($ab/(0.96))*(100).'</td>'; 
      
    echo '<td>'.($ab/(0.871))*(100).'</td>'; 

  //   if ($ab <= "75")
  //   echo '<td>'."Mas".'</td>';
  // else if ($ab <= "77")
  //   echo '<td>'."Nila".'</td>';
  //   else if ($ab <= "98")
  //   echo '<td>'."Lele".'</td>';
  //   else if ($ab <= "99")
  //   echo '<td>'."Gurami".'</td>';
  

                            //   echo '<td><center><a href="alternatifEdit.php?id='.$data['idKriteria'].'" class="btn btn-success a-btn-slide-text">
                            //   <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            //   <span><strong>Edit</strong></span></a></center></td>'; 
                            //   echo '<td><center><a href="alternatifHapus.php?id='.$data['idKriteria'].'" class="btn btn-danger a-btn-slide-text" onclick="return confirm(\'Anda yakin akan menghapus data?\')">
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




<!--  -->

<footer style="background-color: #e3f2fd;">
  <center><p>SPPK Kelas A Kelompok XX</p></center>
</footer>

</body>
</html>
