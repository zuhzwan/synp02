<?php
session_start();
include "konfigurasi/koneksi.php";
include "file/tema/edisi_spesial_gambar/atas.php";
?>
<body>
	
	<div id="wrapper">
	<div id="atas">
	<p>Telp. 081515176779 &nbsp&nbsp Email : info@mtsykuisambogunung.sch.id</p>
	</div>
		<?php include "file/tema/edisi_spesial_gambar/header.php";?>
		
		<div id="menu">
			<?php include "file/tema/edisi_spesial_gambar/menu.php";?>
		</div>
		
		<?php include "file/tema/edisi_spesial_gambar/konten.php";?>
		
		<div id="sidebar">
			<?php include "file/tema/edisi_spesial_gambar/sidebar.php";?>
		</div>
	<div class="clear"></div>
	
		<?php include "file/tema/edisi_spesial_gambar/footer.php"; ?>
	
	<div class="clear"></div>
	</div>
</body>
</html>