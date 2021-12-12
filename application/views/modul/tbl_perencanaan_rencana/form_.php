<html>
<head>
	<title>Form Import</title>

	<!-- Load File jquery.min.js yang ada difolder js -->
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
</head>
<body>
	<h3>Form Import</h3>
	<hr>

	<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
	<br>
	<br>

	<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
	<form method="post" action="<?php echo base_url("index.php/Tbl_perencanaan_rencana/form"); ?>" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="preview" value="Preview">
	</form>

	<?php
	if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
		if(isset($upload_error)){ // Jika proses upload gagal
			echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
			die; // stop skrip
		}

		// Buat sebuah tag form untuk proses import data ke database
		echo "<form method='post' action='".base_url("index.php/Tbl_perencanaan_rencana/import")."'>";

		// Buat sebuah div untuk alert validasi kosong
		echo "<div style='color: red;' id='kosong'>
		Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
		</div>";

		echo "<table border='1' cellpadding='8'>
		<tr>
			<th colspan='5'>Preview Data</th>
		</tr>
		<tr>
			<th>URAIAN</th>
			<th>RINCIAN URAIAN</th>
			<th>VOLUME</th>
			<th>ANGGARAN</th>
		</tr>";

		$numrow = 0;
		$kosong = 0;

		// Lakukan perulangan dari data yang ada di excel
		// $sheet adalah variabel yang dikirim dari controller
		foreach($sheet as $row){
			// Ambil data pada excel sesuai Kolom
			$uraian = $row['C']; // Ambil data uraian
			$riinc_uraian = $row['D']; // Ambil data riinc_uraian
			$volume = $row['L']; // Ambil data jenis kelamin
			$anggaran = $row['M']; // Ambil data anggaran

			// Cek jika semua data tidak diisi
			if($uraian == "" && $riinc_uraian == "" && $volume == "" && $anggaran == "")
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Validasi apakah semua data telah diisi
				$uraian_td = ( ! empty($uraian))? "" : " style='background: #E07171;'"; // Jika uraian kosong, beri warna merah
				$riinc_uraian_td = ( ! empty($riinc_uraian))? "" : " style='background: #E07171;'"; // Jika riinc_uraian kosong, beri warna merah
				$vol_td = ( ! empty($volume))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
				$anggaran_td = ( ! empty($anggaran))? "" : " style='background: #E07171;'"; // Jika anggaran kosong, beri warna merah

				// Jika salah satu data ada yang kosong
				if($uraian == "" or $riinc_uraian == "" or $volume == "" or $anggaran == ""){
					$kosong++; // Tambah 1 variabel $kosong
				}
				
				echo "<tr>";
				echo "<td".$uraian_td.">".$uraian."</td>";
				echo "<td".$riinc_uraian_td.">".$riinc_uraian."</td>";
				echo "<td".$vol_td.">".$volume."</td>";
				echo "<td".$anggaran_td.">".$anggaran."</td>";
				echo "</tr>";
			}

			$numrow++; // Tambah 1 setiap kali looping
		}

		echo "</table>";

	

			echo "<hr>";

			// Buat sebuah tombol untuk mengimport data ke database
			echo "<button type='submit' name='import'>Import</button>";
			echo "<a href='".base_url("index.php/Tbl_perencanaan_rencana")."'>Cancel</a>";
		

		echo "</form>";
	}
	?>

	
</body>
</html>
