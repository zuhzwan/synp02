		<div class="logo">
			<a href="http://schoolhos.com/" target="_blank"><img src="images/logo.png"></a>
		</div>
		
		<?php 
		$namasekolah=mysql_query("SELECT * FROM sh_pengaturan WHERE id_pengaturan='8'");
		$ns=mysql_fetch_array($namasekolah);
		
		$urlsekolah=mysql_query("SELECT * FROM sh_pengaturan WHERE id_pengaturan='1'");
		$us=mysql_fetch_array($urlsekolah);
		
		$userlink=mysql_query("SELECT * FROM sh_users WHERE s_username='$_SESSION[adminsh]'");
		$datauser=mysql_fetch_array($userlink);
		?>
		<div class="front">
		<a href="http://<?php echo "$us[isi_pengaturan]";?>" target="_blank" title="Kunjungi Website"><?php echo "$ns[isi_pengaturan]";?></a><br>
		</div>
		
		<div id="admin">
		<?php
		if ($_SESSION['leveluser']== 'Super Admin'){
		?>
		Selamat Datang, <a href="<?php echo "admin.php?pilih=edit&id=$datauser[id_users]"; ?>" title="Profil Saya"><?php echo "$_SESSION[namalengkap]";?></a>
		<?php }
		else { ?>
		Selamat Datang, <a href="<?php echo "admin.php"; ?>" title="Profil Saya"><?php echo "$_SESSION[namalengkap]";?></a>
		<?php } ?>| <a href='logout.php' onClick="return confirm ('Apakah anda benar-benar akan keluar dari sistem?')" title='Log out'>Logout</a>
		</div>
		
		<div class="clear"></div>