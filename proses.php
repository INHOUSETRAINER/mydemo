<?php
include("koneksi.php");

if($_GET['mode'] == 'add') {
	
	
	//$nama3 = $_POST['nama2'];
	//$detail3 = $_POST['detail2'];
	
	$nama3 = "hery PP";
	$detail3 = "detail hery pp";
	
	$sql = "insert into tbcustomer(namacust,detailcust)
	values ('$nama3','$detail3')";
	$query = sqlsrv_query($conn, $sql);
	
	
//untuk callback result

	if($query) {
		
		echo "sukses tambah pegawai";
		
		
	} else {
		
		echo "tambah Error!, proses batal";	
	}

	
}

?>