<?php
if($_SESSION['leveluser'] == 'Super Admin') {
$database="aplikasi/database/ym.php";
switch($_GET['pilih']){
default: ?>
<h3>Yahoo! Messenger</h3>
<div class="isikanan"><!--Awal class isi kanan-->
								
		<div class="judulisikanan">
			<div class="menuhorisontal"><a href="pengaturan.php">Website</a></div>
			<div class="menuhorisontal"><a href="tema.php">Tema</a></div>
			<div class="menuhorisontalaktif"><a href="ym.php">Yahoo! Messenger</a></div>
			<div class="menuhorisontal"><a href="polling.php">Polling</a></div>
			<div class="menuhorisontal"><a href="link.php">Link</a></div>
			<div class="menuhorisontal"><a href="statistik.php">Statistik</a></div>
		</div>

		<table class="isian">
		<form method='POST' <?php echo "action='$database?pilih=ym&untukdi=tambah'";?> name='tambahym' id='tambahym' >
			<tr><td class="isiankanan" width="100px">Nama Lengkap</td><td class="isian"><input type="text" name="nama_lengkap" class="sedang"></td></tr>
			<tr><td class="isian" colspan="2" style="color:#7f7f7f;"><i>
			Masukkan lengkap pemilik account Yahoo! Messenger sesuai dengan nama sebenarnya, minimal 5 karakter maksimal 30 karakter
			</i><br><hr></td></tr>
			
			<tr><td class="isiankanan" width="100px">Email</td><td class="isian"><input type="text" name="email" class="sedang"></td></tr>
			<tr><td class="isian" colspan="2" style="color:#7f7f7f;"><i>
			Email yang dimasukkan harus email dari Yahoo, untuk <b>@yahoo.com</b> dan <b>@yahoo.co.id</b> tulis id nya saja. Contoh: <b>arirusmanto@yahoo.com</b> ditulis <b>arirusmanto</b>
			</i><br><hr></td></tr>
			
			<tr><td class="isian" colspan="2">
			<input type="submit" class="pencet" value="Tambahkan">
			<input type="reset" class="hapus" value="Reset">
			</td></tr>
		</form>
		
		<script language="JavaScript" type="text/javascript" xml:space="preserve">
			//<![CDATA[
			var frmvalidator  = new Validator("tambahym");
			frmvalidator.addValidation("nama_lengkap","req","Nama lengkap harus diisi");
			frmvalidator.addValidation("nama_lengkap","maxlen=30","Nama lengkap maksimal 30 karakter");
			frmvalidator.addValidation("nama_lengkap","minlen=3","Nama lengkap minimal 5 karakter");
			
			
			frmvalidator.addValidation("email","req","Email harus diisi");
			frmvalidator.addValidation("email","mixlen=30","Email maksimal 30 karakter");
			
			
			//]]>
		</script>
		
		</table>
		<hr>
		<div class="atastabel" style="margin-bottom: 10px">
		</div>
		<?php include "aplikasi/ym.php";?>
</div><!--Akhir class isi kanan-->

		<?php break;
		
		case "edit":
			include "aplikasi/ym_edit.php";
		}
		}
		?>