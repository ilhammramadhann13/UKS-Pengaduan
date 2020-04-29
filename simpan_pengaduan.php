<?php
require 'koneksi.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysql_query("insert into pengaduan(tgl_pengaduan,nik,isi_laporan,status,foto) values('$tgl','$nik','$isi','$ft','$st')");
move_uploaded_file($file, "foto/".$ft);
if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data berhasil,');
		window.location="masyarakat.php"
	</script>
	<?php

}
?>