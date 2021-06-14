<?php

	//Deklarasi alamat server
	$server = "localhost";
	//Deklarasi username
	$user = "root";
	//Deklarasi nama database
	$namadb = "tiumy";
	//Deklarasi password
	$password = "";
	//Mmebuat koneksi kedalam database 
	$conn = mysqli_query($conn, "select * from teman");
	//Membuat variabel json yang berjenis data array
	$json = array();
	//Membaca isi data dari database
	while ($row = mysqli_fetch_assoc($result)){
	$json[] = $row;
	}
	
	echo json_encode($json);
	mysqli_close($conn);
	
?>