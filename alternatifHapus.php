<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$no = $_GET['id'];
	$cek = mysql_query("SELECT no FROM alternatif WHERE no='$no'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM alternatif WHERE no='$no'");
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=alternatif.php\">";
}
}
?>