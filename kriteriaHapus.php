<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$idKriteria = $_GET['id'];
	$cek = mysql_query("SELECT idKriteria FROM kriteria WHERE idKriteria='$idKriteria'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM kriteria WHERE idKriteria='$idKriteria'");
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=kriteria.php\">";
}
}
?>